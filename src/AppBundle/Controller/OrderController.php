<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Order;
use AppBundle\Entity\MoneyFlow;
use AppBundle\Entity\OrderLine;
use AppBundle\Form\Type\OrderType;
use AppBundle\Form\Type\OrderSelfType;
use AppBundle\Form\Type\OrderCashType;
use AppBundle\Form\Type\OrderLineTransactionType;

class OrderController extends Controller
{
    //USER ONLY ==> récupérer ses proprers commandes
    /**
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/orders")
     */
    public function getOrdersAction(Request $request)
    {
        $userAccounts=$this->getUser()->getUserAccounts();
        foreach ($userAccounts as $userAccount)
        {
            if($userAccount->getType() == "somebody")
                $userAccountId = $userAccount->getId();
        }

        $orders = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Order')
            ->findByCustomerUserAccount($userAccountId);
        /* @var $orders Order[] */

        return $orders;
    }
    //USER ONLY ==> récupérer une de ses propres commandes
    /**
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/orders/{order_id}")
     */
    public function getOrderAction(Request $request)
    {
       return $this->getOrderByadminAction($request, true);
    }

    //admin only ==> récupérer une commande spécifique
    /**
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/admin/orders/{order_id}")
     */
    public function getOrderByAdminAction(Request $request, $restrictedAccess = false)
    {
        $em= $this->getDoctrine()->getManager();
        $order = $em
            ->getRepository('AppBundle:Order')
            ->find($request->get('order_id'));
        /* @var $order Order */

        if (empty($order)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Order not found'], Response::HTTP_NOT_FOUND);
        }

        if ($restrictedAccess){
            if(!$order->isPaidCash())
            {
                $user=$order->getCustomerUserAccount()->getUser();
                if($this->getUser()!= $user){
                    return \FOS\RestBundle\View\View::create(['message' => 'Unauthorized to get someone else info'], Response::HTTP_UNAUTHORIZED);
                }
            }

        }
        return $order;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"order"})
     * @Rest\Post("/client-self-order")
     */
    public function postSelfOrderTransactionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $order = new Order();
        $form = $this->createForm(OrderSelfType::class, $order, ['validation_groups' => ['isNotPaidCash']]);
        $form->submit($request->request->get("order")); // Validation des données
        if(!$form->isValid())
            return $form;
        $repository = $em->getRepository('AppBundle:UserAccount');
        $cashRegisterAccountID = $repository->getSuperAdminCashRegisterAccount();
        $cashRegisterAccount = $repository->find($cashRegisterAccountID);
        /*@var $cashRegisterAccount UserAccount */
        $order->setIsOrderedByCustomer(true);
        $order->setCashRegisterAccount($cashRegisterAccount);
        $order->setIsPaidCash(false);

        $content=json_decode($request->getContent());
        /*@var $userAccount UserAccount */
        $userAccount = $repository->find($content->{"order"}->{"customerUserAccount"});
        $balance = $userAccount->getMoneyBalance();
        $promotion =$userAccount->getUser()->getPromotion()->getUserPromotion();
        $moneyLimit = $userAccount->getUser()->getMoneyLimit();
        $total=0.0;
        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $total+=$orderLine->getOrderLinePrice();

            } else
                return $form;
        }
        $total-=$total*($promotion/100);
        if($userAccount->getUser()->getRole()=="ROLE_USER"){
            if($total> $balance-$moneyLimit){
                $json = array("INSUFFICIENT_CASH"=> true, "order_total"=>$total, "balance"=>$balance, "money_limit"=>$moneyLimit);
                return $json;
            }
        }
        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $orderLine->setOrder($order);
                $em->persist($orderLine);
                $em->flush();

            } else
                return $form;
        }
        $em->refresh($order);
        $em->flush();
        $order->creditOrder();
        $em->persist($order);
        $em->flush();
        return $order;

    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"order"})
     * @Rest\Post("/admin/orders/order-someone-else")
     */
    public function postOrderAction(Request $request, $restrictedAccess = false)
    {
        $em = $this->getDoctrine()->getManager();

        $order = new Order();
        $form = $this->createForm(OrderType::class, $order, ['validation_groups' => ['isNotPaidCash']]);
        $form->submit($request->request->get("order")); // Validation des données
        if(!$form->isValid())
            return $form;

        /*@var $cashRegisterAccount UserAccount */
        $order->setIsOrderedByCustomer(false);
        $order->setIsPaidCash(false);

        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $orderLine->setOrder($order);
                $em->persist($orderLine);
                $em->flush();


            } else
                return $form;
        }
        $em->refresh($order);
        $em->flush();
        $order->creditOrder();
        $em->persist($order);
        $em->flush();
        return $order;
    }




    //ADMIN ONLY new order creation ==>  seulement pour les barmans (paiement par cash)

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"order"})
     * @Rest\Post("/admin/orders/cash")
     */
    public function postOrderByCashAction(Request $request)
    { 
        $em = $this->getDoctrine()->getManager();
        $order = new Order();
        $form = $this->createForm(OrderCashType::class, $order, ['validation_groups' => ['isNotPaidCash']]);
        $form->submit($request->request->get("order")); // Validation des données
        if(!$form->isValid())
            return $form;

        /*@var $cashRegisterAccount UserAccount */
        $order->setIsOrderedByCustomer(false);
        $order->setIsPaidCash(true);
        $bank=$em
        ->getRepository('AppBundle:UserAccount')
        ->findOneByType("bank");
        $order->setCustomerUserAccount($bank);

        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $orderLine->setOrder($order);
                $em->persist($orderLine);
                $em->flush();


            } else
                return $form;
        }

        $em->refresh($order);
        $em->flush();
        $order->creditOrder();
        $em->persist($order);
        $em->flush();
        return $order;
    }

    //ADMIN ONLY ==> récupérer toutes les commandes en une fois
    /**
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/admin/orders")
     */
    public function getOrdersByadminAction(Request $request)
    {
        $orders = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Order')
            ->findAll();
        /* @var $orders Order[] */

        return $orders;
    }


    //admin only ==> supprimer une commande/ ne supprime pas vraiment créé un transfert équivalent dans l'autre sens
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"moneyFlow"})
     * @Rest\Delete("/admin/orders/{id}")
     */
    public function removeorderAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $order= $em->getRepository('AppBundle:Order')
            ->find($request->get('id'));
        if (empty($order))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Order not found'], Response::HTTP_NOT_FOUND);
        }
        if($order->isIsCancelled())
            return \FOS\RestBundle\View\View::create(['message' => 'Cannot cancel 2 times the same order'], Response::HTTP_UNAUTHORIZED);
        $order->setIsCancelled(true);
        $em->merge($order);
        $em->flush();
        $cancelMoneyFlow = new MoneyFlow();
        $cancelMoneyFlow->setCreditUserAccount($order->getCashRegisterAccount());
        $cancelMoneyFlow->setDebitUserAccount($order->getCustomerUserAccount());
        $cancelMoneyFlow->setValue($order->getOrderPrice());
        $cancelMoneyFlow->setDescription("Annulation de la commande n°". $order->getId());

        $em->persist($cancelMoneyFlow);
        
        $em->flush();
        return $cancelMoneyFlow;

    }


}