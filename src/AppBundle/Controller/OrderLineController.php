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
use AppBundle\Entity\Product;
use AppBundle\Entity\Order;
use AppBundle\Entity\OrderLine;
use AppBundle\Form\Type\OrderLineType;

class OrderLineController extends Controller
{


    //ADMIN ONLY new OrderLine creation ==>  seulement pour les barmans

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"orderLine"})
     * @Rest\Post("/order-lines")
     */
    public function postOrderLineAction(Request $request)
    {
        $orderLine = new OrderLine();
        $form = $this->createForm(OrderLineType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderLine);
            $em->flush();
            return $orderLine;
        } else
            return $form;
    }

    //ADMIN ONLY ==> récupérer toutes les orderLines
    /**
     * @Rest\View(serializerGroups={"orderLine"})
     * @Rest\Get("/admin/order-lines")
     */
    public function getOrderLinesAction(Request $request)
    {
        $orderLines = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:OrderLine')
            ->findAll();
        /* @var $orderLines OrderLine[] */

        return $orderLines;
    }

    //ADMIN ONLY ==> récupérer une orderLine
    /**
     * @Rest\View(serializerGroups={"orderLine"})
     * @Rest\Get("/admin/order-lines/{id}")
     */
    public function getOrderLineAction(Request $request)
    {
        $orderLine = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:OrderLine')
            ->findOneById($request->get('id'));
        if (empty($orderLine))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Order-line not found'], Response::HTTP_NOT_FOUND);
        }

        return $orderLine;
    }

    //admin only put d'une order-line
    /**
     * @Rest\View(serializerGroups={"orderLine"})
     * @Rest\Put("/admin/order-lines/{id}")
     */
    public function updateOrderLineAction(Request $request, $clearMissing = true)
    {
        $em=$this->getDoctrine()->getManager();
        $orderLine = $em
            ->getRepository('AppBundle:OrderLine')
            ->find($request->get('id'));

        if (empty($orderLine)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Order-line not found'], Response::HTTP_NOT_FOUND);
        }
        if ($clearMissing) {
            $options = ['validation_groups'=>['Default', 'FullUpdate']];
        } else {
            $options = []; 
        }
        $form = $this->createForm(OrderLineType::class, $orderLine, $options);
        $form->submit($request->request->all(), $clearMissing);
        if ($form->isValid()) {
            $em->merge($orderLine);
            $em->flush();
            return $orderLine;
        } else {
            return $form;
        }
    }

    //admin only => patcher une order-line

    /**
     * @Rest\View(serializerGroups={"orderLine"})
     * @Rest\Patch("/admin/order-lines/{id}")
     */
    public function patchOrderLineAction(Request $request)
    {
        return $this->updateOrderLineAction($request, false);
    }

    //admin only ==> supprimer une order-line
    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"orderLine"})
     * @Rest\Delete("/admin/order-lines/{id}")
     */
    public function removeOrderLineAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $orderLine = $em->getRepository('AppBundle:OrderLine')
            ->find($request->get('id'));

        if ($orderLine) {
            $em->remove($orderLine);
            $em->flush();
        }
    }
}
