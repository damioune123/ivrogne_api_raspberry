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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use AppBundle\Form\Type\OrderLineTransactionType;

class OrderLineController extends Controller
{


    /**
     *  This URL aims to get a specific order-line (admin only).
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
     *  section="order-lines",
     *  description="Get a single order line (admin only)",
     *  output={"class"="AppBundle\Entity\OrderLine",
     *           "groups" ={"orderLine"}}
     *
     * )
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

    /**
     * This URL aims to get the admin and user price of a single order line.
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
     *  section="order-lines",
     *  input={"class"=OrderLineTransactionType::class, "name"=""},
     *  description="Get the prices of a single orderline",
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/order-lines/check-prices")
     */
    public function getPricesAction(Request $request)
    {
        if($this->getUser()->getRole()=="ROLE_SUPER_ADMIN"){
            return \FOS\RestBundle\View\View::create(['message' => 'Super admin does\'t have user account'], Response::HTTP_NOT_FOUND);
        }
        $em = $this->getDoctrine()->getManager();

        $promotionAdmin = floatval($em->getRepository("AppBundle:Promotion")->getAdminPromotion()["user_promotion"]);
        $promotionUser =floatval($em->getRepository("AppBundle:Promotion")->getUserPromotion()["user_promotion"]);
        $orderLine = new OrderLine();
        $form = $this->createForm(OrderLineTransactionType::class, $orderLine, ['validation_groups' => ['Default', 'New']]);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $totalAdmin=$orderLine->getOrderLinePriceAdmin();
            $totalUser=$orderLine->getOrderLinePriceUser();

        } else
            return $form;

        $totalAdmin-=$totalAdmin*($promotionAdmin/100);
        $totalUser-=$totalUser*($promotionUser/100);
        return array("total_admin"=>$totalAdmin, "total_user"=>$totalUser);


    }


}
