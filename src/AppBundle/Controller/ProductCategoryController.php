<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\ProductCategory;
use AppBundle\Form\Type\ProductCategoryType;

class ProductCategoryController extends Controller
{


    //ADMIN ONLY new ProductCategory creation ==>  seulement pour les barmans

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"productCategory"})
     * @Rest\Post("/admin/product-categories")
     */
    public function postProductCategoriesAction(Request $request)
    {
        $productCategory = new ProductCategory();
        $form = $this->createForm(ProductCategoryType::class, $productCategory);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productCategory);
            $em->flush();
            return $productCategory;
        } else
            return $form;
    }

    //ADMIN ONLY ==> récupérer toutes les catégories de produits
    /**
     * @Rest\View(serializerGroups={"productCategory"})
     * @Rest\Get("/product-categories")
     */
    public function getProductCategoriesAction(Request $request)
    {
        $productCategories = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:ProductCategory')
            ->findAll();
        /* @var $productCategorues ProductCategory[] */

        return $productCategories;
    }

    //ADMIN ONLY ==> récupérer une catégorie de produits
    /**
     * @Rest\View(serializerGroups={"productCategory"})
     * @Rest\Get("/product-categories/{id}")
     */
    public function getProductCategoryAction(Request $request)
    {
        $productCategory = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:ProductCategory')
            ->findOneById($request->get('id'));
        if (empty($productCategory))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Product Category not found'], Response::HTTP_NOT_FOUND);
        }

        return $productCategory;
    }

    //admin only put d'une catégorie de produits
    /**
     * @Rest\View(serializerGroups={"productCategory"})
     * @Rest\Put("/admin/product-categories/{id}")
     */
    public function updateProductCategoryAction(Request $request, $clearMissing = true)
    {
        $em=$this->getDoctrine()->getManager();
        $productCategory = $em
            ->getRepository('AppBundle:ProductCategory')
            ->find($request->get('id'));

        if (empty($productCategory)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Product Category not found'], Response::HTTP_NOT_FOUND);
        }
        $form = $this->createForm(ProductCategoryType::class, $productCategory);
        $form->submit($request->request->all(), $clearMissing);
        if ($form->isValid()) {
            $em->merge($productCategory);
            $em->flush();
            return $productCategory;
        } else {
            return $form;
        }
    }

    //admin only => patcher une catégorie de produits

    /**
     * @Rest\View(serializerGroups={"productCategory"})
     * @Rest\Patch("/admin/product-categories/{id}")
     */
    public function patchProductCategoryAction(Request $request)
    {
        return $this->updateProductCategoryAction($request, false);
    }

    //admin only ==> supprimer une catégorie de produit
    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"productCategory"})
     * @Rest\Delete("/admin/product-categories/{id}")
     */
    public function removeProductCategoryAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $productCategory = $em->getRepository('AppBundle:ProductCategory')
            ->find($request->get('id'));

        if ($productCategory) {
            $em->remove($productCategory);
            $em->flush();
        }
    }

}