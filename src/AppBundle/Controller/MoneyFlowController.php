<?php
namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\UserAccount;
use AppBundle\Entity\MoneyFlow;
use AppBundle\Form\Type\MoneyFlowType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;

class MoneyFlowController extends Controller
{


    /**
     * This URL aims to create a new monew flow (transaction betweeen a debit and credit account) (admin only).
     *
     * @ApiDoc(
     * headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  resource=true,
     *  section="money-flows",
     *  description="Create a money flow (admin only)",
     *  input={"class"=MoneyFlowType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\MoneyFlow",
     *           "groups" ={"moneyFlow"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"moneyFlow"})
     * @RequestParam(name="adminAuthentifier", requirements="\d+", nullable=false)
     * @RequestParam(name="accountId", requirements="\d+", nullable=false)
     * @RequestParam(name="type", requirements="(debit|credit)", description="Get money flow as debit or credit", nullable=false)
     * @Rest\Post("/admin/money-flows")
     */
    public function createMoneyFlowAction(Request $request)
    {
        /* @var $moneyFlow MoneyFlow */
        $moneyFlow = new MoneyFlow();
        $form = $this->createForm(MoneyFlowType::class, $moneyFlow);
        $form->submit($request->request->all());
        $em = $this->getDoctrine()->getManager();
        if ($form->isValid()) {
            $userAccount =    $em->getRepository('AppBundle:UserAccount')
                ->findOneById($request->get('accountId'));
            $bankAccountId = $em->getRepository('AppBundle:UserAccount')
                            ->getBankAccount();
            $bankAccount =$em->getRepository('AppBundle:UserAccount')->find($bankAccountId);
            if(empty($userAccount)){
                return \FOS\RestBundle\View\View::create(['message' => 'user account not found '], Response::HTTP_NOT_FOUND);
            }
            $admin= $em->getRepository('AppBundle:User')
                ->find($request->get('adminAuthentifier'));
            if (empty($admin))
            {
                return \FOS\RestBundle\View\View::create(['message' => 'Admin authentifier not found'], Response::HTTP_NOT_FOUND);
            }
            if($admin->getRole() != "ROLE_ADMIN"){
                return \FOS\RestBundle\View\View::create(['message' => 'The card pass does not match with an admin'], Response::HTTP_BAD_REQUEST);
            }
            $moneyFlow->setAdminAuthentifier($admin);
            if($request->get('type')=="debit"){
                $moneyFlow->setCreditUserAccount($bankAccount);
                $moneyFlow->setDebitUserAccount($userAccount);
            }
            if($request->get('type')=="credit"){
                $moneyFlow->setCreditUserAccount($userAccount);
                $moneyFlow->setDebitUserAccount($bankAccount);
            }
            $em->persist($moneyFlow);
            $em->flush();
            $moneyFlow->debitAndCreditAccounts();
            return $moneyFlow;
        } else
            return $form;
    }


    /**
     * This URL aims to get a monew flow by id Get(transaction betweeen a debit and credit account) (admin only).
     *
     * @ApiDoc(
     * headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  resource=true,
     *  section="money-flows",
     *  description="Get a money flow by id(admin only)",
     *  output={"class"="AppBundle\Entity\MoneyFlow",
     *           "groups" ={"moneyFlow"}}
     *
     * )
     * @Rest\View(serializerGroups={"moneyFlow"})
     * @Rest\Get("/admin/money-flows/{id}")
     */
    public function getMoneyFlowByAdminAction(Request $request)
    {
        $moneyFlow = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:MoneyFlow')
            ->findOneById($request->get('id'));
        if (empty($moneyFlow))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Money-flow not found'], Response::HTTP_NOT_FOUND);
        }

        return $moneyFlow;
    }
    /**
     * This URL aims to get a monew flow by id Get(transaction betweeen a debit and credit account) (only own information).
     *
     * @ApiDoc(
     * headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  resource=true,
     *  section="money-flows",
     *  description="Get a money flow by id(only own information)",
     *  output={"class"="AppBundle\Entity\MoneyFlow",
     *           "groups" ={"moneyFlow"}}
     *
     * )
     * @Rest\View(serializerGroups={"moneyFlow"})
     * @RequestParam(name="type", requirements="(debit|credit)", description="Get money flow as debit or credit", nullable=false)
     * @Rest\Get("/money-flows/{id}")
     */
    public function getMoneyFlowAction(Request $request)
    {
        /* @var $moneyFlow MoneyFlow */
        $moneyFlow = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:MoneyFlow')
            ->findOneById($request->get('id'));
        if (empty($moneyFlow))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Money-flow not found'], Response::HTTP_NOT_FOUND);
        }
        if($request->get('type')=="debit"){
            if($this->getUser()->getUserAccounts()[0]->getId() !=$moneyFlow->getDebitUserAccount()->getId()){
                return \FOS\RestBundle\View\View::create(['message' => 'you are not the debit account of the money Flow'], Response::HTTP_BAD_REQUEST);
            }
        }
        else{
            if($this->getUser()->getUserAccounts()[0]->getId() !=$moneyFlow->getCreditUserAccount()->getId() ){
                return \FOS\RestBundle\View\View::create(['message' => 'you are not the credit account of the money Flow'], Response::HTTP_BAD_REQUEST);
            }
        }
        return $moneyFlow;
    }

    /**
     *
     * This URL aims to delete a monew flow by id Get(transaction betweeen a debit and credit account) (admin only).
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
     *  section="money-flows",
     *  description="Delete a money flow by id(admin only)",
     *  output={"class"="AppBundle\Entity\MoneyFlow",
     *           "groups" ={"moneyFlow"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"moneyFlow"})
     * @RequestParam(name="adminAuthentifier", requirements="\d+", nullable=false)
     * @Rest\Delete("/admin/money-flows/{id}")
     */
    public function removeMoneyFlowAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $moneyFlow = $em->getRepository('AppBundle:MoneyFlow')
            ->find($request->get('id'));
        if (empty($moneyFlow))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Money-flow not found'], Response::HTTP_NOT_FOUND);
        }
        if($moneyFlow->getIsCancelled())
            return \FOS\RestBundle\View\View::create(['message' => 'Cannot cancel 2 times the same money-flow'], Response::HTTP_BAD_REQUEST);
        $moneyFlow->setIsCancelled(true);


        $cancelMoneyFlow = new MoneyFlow();
        $cancelMoneyFlow->setCreditUserAccount($moneyFlow->getDebitUserAccount());
        $cancelMoneyFlow->setDebitUserAccount($moneyFlow->getCreditUserAccount());
        $cancelMoneyFlow->setValue($moneyFlow->getValue());
        $cancelMoneyFlow->setDescription("Annulation du transfert d'argent n°". $moneyFlow->getId());

        $admin= $em->getRepository('AppBundle:User')
            ->find($request->get('adminAuthentifier'));
        if (empty($admin))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Admin authentifier not found'], Response::HTTP_NOT_FOUND);
        }
        if($admin->getRole() != "ROLE_ADMIN"){
            return \FOS\RestBundle\View\View::create(['message' => 'The card pass does not match with an admin'], Response::HTTP_BAD_REQUEST);
        }

        $cancelMoneyFlow->setAdminAuthentifier($admin);



        $em->persist($cancelMoneyFlow);
        $em->merge($moneyFlow);
        $em->flush();
        $cancelMoneyFlow->debitAndCreditAccounts();
        return $moneyFlow;

    }
}
