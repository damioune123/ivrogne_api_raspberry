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

}
