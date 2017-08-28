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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;


class ProductCategoryController extends Controller
{



    /**
     * This URL aims to create a new product category (admin only).
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
     *  section="product-categories",
     *  description="Create a product category (admin only)",
     *  input={"class"=ProductCategoryType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\ProductCategory",
     *           "groups" ={"productCategory"}}
     *
     * )
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

    /**
     * This URL aims to get all product categories.
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
     *  section="product-categories",
     *  description="Get all product categories",
     *  output={"class"="AppBundle\Entity\ProductCategory",
     *           "groups" ={"productCategory"}}
     *
     * )
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

    /**
     * This URL aims to get a product category by id. .
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
     *  section="product-categories",
     *  description="Get a product category by id.",
     *  output={"class"="AppBundle\Entity\ProductCategory",
     *           "groups" ={"productCategory"}}
     *
     * )
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

    /**
     *  This URL aims to replace a product category's information (admin only).
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
     *  section="product-categories",
     *  description="Replace a product category's information (admin only)",
     *  input={"class"=ProductCategoryType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\ProductCategory",
     *           "groups" ={"productCategory"}}
     *
     * )
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

    /**
     *  This URL aims to patch a product category's information(admin only).
     *
     * @ApiDoc(
     *  resource=true,
     *  section="product-categories",
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  description="Patch a product category (admin only)",
     *  input={"class"=ProductCategoryType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\ProductCategory",
     *           "groups" ={"productCategory"}}
     *
     * )
     * @Rest\View(serializerGroups={"productCategory"})
     * @Rest\Patch("/admin/product-categories/{id}")
     */
    public function patchProductCategoryAction(Request $request)
    {
        return $this->updateProductCategoryAction($request, false);
    }

    /**
     * This URL aims to remove a product category (super-admin only).
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
     *  section="product-categories",
     *  description="Remove a product category (super-admin only)",
     *  output={"class"="AppBundle\Entity\ProductCategory",
     *           "groups" ={"productCategory"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"productCategory"})
     * @Rest\Delete("/super-admin/product-categories/{id}")
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