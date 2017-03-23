<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Barcode;
use AppBundle\Form\Type\BarcodeType;

class BarcodeController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"barcode"})
     * @Rest\Get("/barcode")
     */
    public function getBarcodeAction(Request $request)
    {
        $barcodes = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Barcode')
            ->findAll();
        $minTime =new \DateTime('now -1 min');
        if(sizeof($barcodes) ==0 or $barcodes[0]->getCreatedAt()<$minTime)
            return("Pas de barcode valide rentrés !");

        return $barcodes[0];
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"barcode"})
     * @Rest\Post("/barcode")
     */
    public function postBarcodeAction(Request $request)
    {
        $barcodes= $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Barcode')
            ->findAll();
        $em = $this->getDoctrine()->getManager();
        foreach ($barcodes as $bc) {
            $em->remove($bc);
        }

        $em->flush();

        $barcode = new Barcode();
        $form = $this->createForm(BarcodeType::class, $barcode);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($barcode);
            $em->flush();
            return $barcode;
        } else
            return $form;
    }
   
}