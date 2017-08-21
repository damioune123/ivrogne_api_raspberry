<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Promotion;
use AppBundle\Form\Type\PromotionType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class PromotionController extends Controller
{


    /**
     *
     *  This URL aims to get all promotions.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="promotions",
     *  description="Get all promotions",
     *  output={"class"="AppBundle\Entity\promotion",
     *           "groups" ={"promotion"}}
     *
     * )
     * @Rest\View(serializerGroups={"promotion"})
     * @Rest\Get("/promotions")
     */
    public function getPromotionsAction(Request $request)
    {
        $promotions = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Promotion')
            ->findAll();
        /* @var $promotions Promotion[] */

        return $promotions;
    }

    /**
     *
     * This URL aims to replace a promotion's information. (Only super admin)
     *
     * @ApiDoc(
     *  resource=true,
     *  section="promotions",
     *  description="Replace a promotion information (Only super admin).",
     *  input={"class"=PromotionType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\promotion",
     *           "groups" ={"promotion"}}
     *
     * )
     * @Rest\View(serializerGroups={"promotion"})
     * @Rest\Put("/super-admin/promotions/{name}")
     */
    public function updatePromotionAction(Request $request, $clearMissing = true)
    {
        $em=$this->getDoctrine()->getManager();
        $promotion = $em
            ->getRepository('AppBundle:Promotion')
            ->findByPromotionName($request->get('name'))[0];

        if (empty($promotion)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Promotion not found'], Response::HTTP_NOT_FOUND);
        }
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->submit($request->request->all(), $clearMissing);
        if ($form->isValid()) {
            $em->merge($promotion);
            $em->flush();
            return $promotion;
        } else {
            return $form;
        }
    }



    /**
     *  This URL aims to change some of a promotion's information. (Only super admin)
     *
     * @ApiDoc(
     *  resource=true,
     *  section="promotions",
     *  description="Patch a promotion information (Only super admin).",
     *  input={"class"=PromotionType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\promotion",
     *           "groups" ={"promotion"}}
     *
     * )
     * @Rest\View(serializerGroups={"promotion"})
     * @Rest\Patch("/super-admin/promotions/{name}")
     */
    public function patchPromotionAction(Request $request)
    {
        return $this->updatePromotionAction($request, false);
    }



}
