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
class StatisticController extends Controller
{

    /**
     * @Rest\View(serializerGroups={"stat"})
     * @Rest\Get("/admin/orders_stat")
     */
    public function getorderStatAction(Request $request)

    {
        $orders = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Order')
            ->findAll();
        /* @var $orders Order[] */
        return $orders;

    }
  
}
