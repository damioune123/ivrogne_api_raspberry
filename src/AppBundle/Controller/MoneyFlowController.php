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

class MoneyFlowController extends Controller
{


    //ADMIN ONLY new moneyFlow creation ==>  seulement pour les barmans

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"moneyFlow"})
     * @Rest\Post("/money-flows")
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
     * @Rest\View(serializerGroups={"moneyFlow"})
     * @Rest\Get("/admin/money-flows")
     */
    public function getMoneyFlowsAction(Request $request)
    {
        $moneyFlows = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:MoneyFlow')
            ->findAll();
        /* @var $moneyFlows MoneyFlow[] */

        return $moneyFlows;
    }

    //ADMIN ONLY ==> récupérer un moneyFlow
    /**
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

    //admin only ==> supprimer un Money-flow / ne supprime pas vraiment créé un transfert équivalent dans l'autre sens
    /**
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
