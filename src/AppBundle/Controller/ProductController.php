<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductCategory;
use AppBundle\Form\Type\ProductType;

class ProductController extends Controller
{


    //ADMIN ONLY new Product creation ==>  seulement pour les barmans

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"product"})
     * @Rest\Post("/admin/products")
     */
    public function postProductAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            return $product;
        } else
            return $form;
    }

    //ADMIN ONLY ==> récupérer toutes les produits
    /**
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Get("/admin/products")
     */
    public function getProductsAction(Request $request)
    {
        $products = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Product')
            ->findAll();
        /* @var $products Product[] */

        return $products;
    }

    //ADMIN ONLY ==> récupérer un produit
    /**
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Get("/products/{id}")
     */
    public function getProductAction(Request $request)
    {
        $product = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Product')
            ->findOneByBarcode($request->get('id'));
        if (empty($product))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
        }

        return $product;
    }

    //admin only put d'un produit
    /**'
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Put("/admin/products/{id}")
     */
    public function updateProductAction(Request $request, $clearMissing = true)
    {
        $em=$this->getDoctrine()->getManager();
        $product = $em
            ->getRepository('AppBundle:Product')
            ->find($request->get('id'));

        if (empty($product)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
        }
        $form = $this->createForm(ProductType::class, $product);
        $form->submit($request->request->all(), $clearMissing);
        if ($form->isValid()) {
            $em->merge($product);
            $em->flush();
            return $product;
        } else {
            return $form;
        }
    }

    //admin only => patcher un produit

    /**
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Patch("/admin/products/{id}")
     */
    public function patchProductAction(Request $request)
    {
        return $this->updateProductAction($request, false);
    }

    //admin only ==> supprimer un produit
    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"product"})
     * @Rest\Delete("/admin/products/{barcode}")
     */
    public function removeProductAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $product = $em->getRepository('AppBundle:Product')
            ->findOneByBarcode($request->get('barcode'));

        if ($product) {
            $em->remove($product);
            $em->flush();
        }
    }
}
