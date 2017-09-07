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
use AppBundle\Entity\UserAccount;
use AppBundle\Entity\User;

use AppBundle\Form\Type\OrderType;
use AppBundle\Form\Type\OrderLineTransactionType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections;
class OrderController extends Controller
{
    /**
     *
     * This URL aims to get all own orders.
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Get all own orders (own information)",
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     *
     * )
     * @QueryParam(name="page", requirements="\d+", default="1", description="Page of the overview. If operations selected", nullable=false)
     * @RequestParam(name="sort", requirements="(asc|desc)", default="desc", description="Sort direction", nullable=false)
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/orders")
     */
    public function getOrdersAction(Request $request)
    {
        if($this->getUser()->getRole()=="ROLE_SUPER_ADMIN"){
            return \FOS\RestBundle\View\View::create(['message' => 'Super admin does\'t have user account'], Response::HTTP_NOT_FOUND);
        }
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:UserAccount');
        if($this->getUser()->getRole()=="ROLE_BARMAN")
        {

            $userAccount = $repository>getRegisterAccount();
        }
        else{

            /* @var $userAccount UserAccount */
            $userAccount =$this->getUser()->getUserAccounts()[0];

        }
        /* @var $orders Order[] */
        $page = intval($request->get('page'));

        if ($request->get('sort') == "desc"){
            $orders = $em ->getRepository('AppBundle:Order')
                ->findBy(
                    array('customerUserAccount'=>$userAccount),
                    array('id' => "DESC"),
                    $limit  = $page*10,
                    $offset = ($page-1)*10);

        }
        else{
            $orders = $em->getRepository('AppBundle:Order')
                ->findBy(
                    array('customerUserAccount'=>$userAccount),
                    array('id' => "ASC"),
                    $limit  = $page*10,
                    $offset = ($page-1)*10);
        }
        return $orders;

    }
    /**
     * This URL aims to get a single own order by id (own information).
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Get a single order by id (only own)",
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     * )
     *
     *
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/orders/{order_id}")
     */
    public function getOrderAction(Request $request)
    {
       return $this->getOrderByadminAction($request, true);
    }

    /**
     * This URL aims to get a single own order by id (admin only).
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Get a single order by id (only admin)",
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     * )
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
     * This URL aims to create an order by the client.
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Create an order by the client (self only)",
     *  input={"class"=OrderSelfType::class, "name"=""},
     *
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"order"})
     * @Rest\Post("/orders/client-self-order")
     */
    public function postSelfOrderTransactionAction(Request $request)
    {
        if($this->getUser()->getRole()=="ROLE_SUPER_ADMIN"){
            return \FOS\RestBundle\View\View::create(['message' => 'Super admin does\'t have user account'], Response::HTTP_NOT_FOUND);
        }
        $em = $this->getDoctrine()->getManager();
        $order = new Order();
        $repository = $em->getRepository('AppBundle:UserAccount');
        $registerAccountID = $repository->getRegisterAccount();
        /* @var $registerAccount UserAccount */

        $registerAccount = $repository->find($registerAccountID);
        $order->setRegisterAccount($registerAccount);

        $order->setIsOrderedByCustomer(true);

        $order->setIsPaidCash(false);

        if($this->getUser()->getRole()=="ROLE_BARMAN")
        {

            $userAccount = $repository>getRegisterAccount();
        }
        else{

            /* @var $userAccount UserAccount */
            $userAccount =$this->getUser()->getUserAccounts()[0];

        }
        $order->setCustomerUserAccount($userAccount);
        $promotion =$userAccount->getUser()->getPromotion()->getUserPromotion();
        $total=0.0;
        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                if($userAccount->getUser()->getRole()=="ROLE_USER" ||$userAccount->getUser()->getRole()=="ROLE_BARMAN"){
                    $total+=$orderLine->getOrderLinePriceUser();
                }

                else{
                    $total+=$orderLine->getOrderLinePriceAdmin();
                }

            } else
                return $form;
        }
        $total-=$total*($promotion/100);

        if($this->getUser()->getRole()!="ROLE_BARMAN"){
            if($total> $userAccount->getAvailableBalance()){
                $json = array("INSUFFICIENT_CASH"=> true, "order_total"=>$total, "balance"=>$userAccount->getMoneyBalance(), "available_balance"=>$userAccount->getAvailableBalance());
                return $json;
            }
        }

        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $orderLine->setOrder($order);
                $orderLine->setDuringOrderPrices();
                $em->persist($orderLine);
                $em->flush();

            } else
                return $form;
        }

       // $em->refresh($order);
        $em->flush();
        $order->creditOrder();
        $em->persist($order);
        $em->flush();
        $orderLines = $em
            ->getRepository('AppBundle:OrderLine')
            ->findByOrder($order->getId());
        $order->setOrderLines($orderLines);
        $order->setDuringOrderPrice();
        $em->merge($order);
        $em->flush();
        return $order;

    }

    /**
     * This URL aims to create an order by an admin for someone else (admin only).
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Create an order by an admin for someone else (admin only)",
     *  input={"class"=OrderType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     *
     * )
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
        $repository = $em->getRepository('AppBundle:UserAccount');
        $registerAccountID = $repository->getRegisterAccount();
        /* @var $registerAccount UserAccount */
        $registerAccount = $repository->find($registerAccountID);
        $order->setRegisterAccount($registerAccount);

        /*@var $registerAccount UserAccount */
        $order->setIsOrderedByCustomer(false);
        $order->setIsPaidCash(false);
        $content=json_decode($request->getContent());

        /* @var $userAccount UserAccount */
        $userAccount = $repository->find($content->{"order"}->{"customerUserAccount"});
        $promotion =$userAccount->getUser()->getPromotion()->getUserPromotion();
        $total=0.0;
        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                if($userAccount->getUser()->getRole()=="ROLE_USER" ||$userAccount->getUser()->getRole()=="ROLE_BARMAN"){
                    $total+=$orderLine->getOrderLinePriceUser();
                }

                else{
                    $total+=$orderLine->getOrderLinePriceAdmin();
                }


            } else
                return $form;
        }
        $total-=$total*($promotion/100);
        if($total> $userAccount->getAvailableBalance()){
            $json = array("INSUFFICIENT_CASH"=> true, "order_total"=>$total, "balance"=>$userAccount->getMoneyBalance(), "available_balance"=>$userAccount->getAvailableBalance());
            return $json;
        }

        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $orderLine->setOrder($order);
                $orderLine->setDuringOrderPrices();
                $em->persist($orderLine);
                $em->flush();


            } else
                return $form;
        }
       // $em->refresh($order);
        $order->setDuringOrderPrice();
        $em->flush();
        $order->creditOrder();
        $em->persist($order);
        $em->flush();
        $orderLines = $em
            ->getRepository('AppBundle:OrderLine')
            ->findByOrder($order->getId());
        $order->setOrderLines($orderLines);
        $order->setDuringOrderPrice();
        $em->merge($order);
        $em->flush();
        return $order;
    }

    /**
     * This URL aims to create an order by an admin in cash (no transaction registered) (admin only).
     *
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Create an order by an admin in cash (admin only)",
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"order"})
     * @Rest\Post("/admin/orders/cash")
     */
    public function postOrderByCashAction(Request $request)
    { 
        $em = $this->getDoctrine()->getManager();
        $order = new Order();

        /*@var $registerAccount UserAccount */
        $order->setIsOrderedByCustomer(false);
        $order->setIsPaidCash(true);
        $repository = $em->getRepository('AppBundle:UserAccount');
        $registerAccountID = $repository->getRegisterAccount();
        /* @var $registerAccount UserAccount */
        $registerAccount = $repository->find($registerAccountID);

        $bankAccountID =  $repository->getBankAccount();
        $bankAccount = $repository->find($bankAccountID);
        $order->setRegisterAccount($registerAccount);
        $order->setCustomerUserAccount($bankAccount);

        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $orderLine->setOrder($order);
                $orderLine->setDuringOrderPrices();
                $em->persist($orderLine);
                $em->flush();


            } else
                return $form;
        }

    //é    $em->refresh($order);
        $order->setDuringOrderPrice();
        $em->flush();
        $order->creditOrder();
        $em->persist($order);
        $em->flush();
        $orderLines = $em
            ->getRepository('AppBundle:OrderLine')
            ->findByOrder($order->getId());
        $order->setOrderLines($orderLines);
        $order->setDuringOrderPrice();
        $em->merge($order);
        $em->flush();
        return $order;
    }


    /**
     * This URL aims to get all orders (only admin).
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Get all orders (only admin)",
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     *
     * )
     * @QueryParam(name="page", requirements="\d+", default="1", description="Page of the overview. If operations selected", nullable=false)
     * @RequestParam(name="sort", requirements="(asc|desc)", default="desc", description="Sort direction", nullable=false)
     * @Rest\View(serializerGroups={"order"})
     * @Rest\Get("/admin/orders")
     */
    public function getOrdersByadminAction(Request $request)
    {

        $em= $this->getDoctrine()->getManager();
        /* @var $orders Order[] */
        $page = intval($request->get('page'));

        if ($request->get('sort') == "desc"){
            $orders = $em ->getRepository('AppBundle:Order')
                ->findBy(
                    array(),
                    array('id' => "DESC"),
                    $limit  = $page*10,
                    $offset = ($page-1)*10);

        }
        else{
            $orders = $em->getRepository('AppBundle:Order')
                ->findBy(
                    array(),
                    array('id' => "ASC"),
                    $limit  = $page*10,
                    $offset = ($page-1)*10);
        }
        return $orders;
    }



    /**
     * This URL aims to delete an order by id (only admin). Both accounts (debit and credit) will be credited, the transaction zill not be deleted, but the inverse operation will be done.
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Delete an order by id (only admin)",
     *  output={"class"="AppBundle\Entity\Order",
     *           "groups" ={"order"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"order"})
     * @RequestParam(name="adminAuthentifier", requirements="\d+", nullable=false)
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
            return \FOS\RestBundle\View\View::create(['message' => 'Cannot cancel 2 times the same order'], Response::HTTP_BAD_REQUEST);
        /* @var $admin User */
        $admin= $em->getRepository('AppBundle:User')
            ->find($request->get('adminAuthentifier'));
        if (empty($admin))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Admin authentifier not found'], Response::HTTP_NOT_FOUND);
        }
        if($admin->getRole() != "ROLE_ADMIN"){
            return \FOS\RestBundle\View\View::create(['message' => 'The card pass does not match with an admin'], Response::HTTP_BAD_REQUEST);
        }

        $order->setIsCancelled(true);
        $em->merge($order);
        $em->flush();
        $cancelMoneyFlow = new MoneyFlow();
        $cancelMoneyFlow->setCreditUserAccount($order->getRegisterAccount());
        $cancelMoneyFlow->setDebitUserAccount($order->getCustomerUserAccount());
        $cancelMoneyFlow->setValue($order->getOrderPrice());
        $cancelMoneyFlow->setAdminAuthentifier($admin);
        $cancelMoneyFlow->setDescription("Annulation de la commande n°". $order->getId());

        $em->persist($cancelMoneyFlow);
        
        $em->flush();
        $order= $em->getRepository('AppBundle:Order')
            ->find($request->get('id'));
        return $order;

    }
    /**
     * This URL aims to get the admin and user price of a list of order lines
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="orders",
     *  description="Get the prices of a list of orderlines ",
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/orders/check-prices")
     */
    public function getPricesAction(Request $request)
    {
        if($this->getUser()->getRole()=="ROLE_SUPER_ADMIN"){
            return \FOS\RestBundle\View\View::create(['message' => 'Super admin does\'t have user account'], Response::HTTP_NOT_FOUND);
        }
        $em = $this->getDoctrine()->getManager();

        $promotionAdmin = floatval($em->getRepository("AppBundle:Promotion")->getAdminPromotion()["user_promotion"]);
        $promotionUser =floatval($em->getRepository("AppBundle:Promotion")->getUserPromotion()["user_promotion"]);
        $totalAdmin=0.0;
        $totalUser=0.0;
        foreach ($request->request->get("orderlines") as $value) {
            $orderLine = new OrderLine();
            $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
            $form->submit($value);
            if ($form->isValid()) {
                $totalAdmin+=$orderLine->getOrderLinePriceAdmin();
                $totalUser+=$orderLine->getOrderLinePriceUser();

            } else
                return $form;
        }
        $totalAdmin-=$totalAdmin*($promotionAdmin/100);
        $totalUser-=$totalUser*($promotionUser/100);
        return array("total_admin"=>$totalAdmin, "total_user"=>$totalUser);


    }


}