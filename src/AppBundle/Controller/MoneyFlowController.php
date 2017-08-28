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
     * @Rest\Post("/admin/money-flows")
     */
    public function postMoneyFlowAction(Request $request)
    {
        $moneyFlow = new MoneyFlow();
        $form = $this->createForm(MoneyFlowType::class, $moneyFlow);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
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
    public function getMoneyFlowAction(Request $request)
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
            return \FOS\RestBundle\View\View::create(['message' => 'Cannot cancel 2 times the same money-flow'], Response::HTTP_UNAUTHORIZED);
        $moneyFlow->setIsCancelled(true);
        $em->merge($moneyFlow);
        $em->flush();
        $cancelMoneyFlow = new MoneyFlow();
        $cancelMoneyFlow->setCreditUserAccount($moneyFlow->getDebitUserAccount());
        $cancelMoneyFlow->setDebitUserAccount($moneyFlow->getCreditUserAccount());
        $cancelMoneyFlow->setValue($moneyFlow->getValue());
        $cancelMoneyFlow->setDescription("Annulation du transfert d'argent n°". $moneyFlow->getId());
        $em->persist($cancelMoneyFlow);
        $em->flush();
        
        return $cancelMoneyFlow;

    }
}
