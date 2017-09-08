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
use AppBundle\Form\Type\ProductPatchType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;


class ProductController extends Controller
{


    /**
     * This URL aims to create a new product.
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
     *  section="products",
     *  description="Create a product (admin only)",
     *  input={"class"=ProductType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\product",
     *           "groups" ={"product"}}
     *
     * )
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

    /**
     * This URL aims to get all products.
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
     *  section="products",
     *  description="Get all products",
     *  output={"class"="AppBundle\Entity\product",
     *           "groups" ={"product"}}
     *
     * )
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Get("/products")
     */
    public function getProductsAction(Request $request)
    {
        $products = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Product')
            ->findAll();
        /* @var $products Product[] */

        return $products;
    }

    /**
     * This URL aims to get a product by id.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="products",
     *  description="Get a product by id.",
     *  output={"class"="AppBundle\Entity\product",
     *           "groups" ={"product"}}
     *
     * )
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Get("/products/{barcode}")
     */
    public function getProductAction(Request $request)
    {
        $product = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Product')
            ->findOneByBarcode($request->get('barcode'));
        if (empty($product))
        {
            return \FOS\RestBundle\View\View::create(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
        }

        return $product;
    }

    /**'
     * This URL aims to replace a product's information (admin only).
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
     *  section="products",
     *  description="Put a product (admin only)",
     *  input={"class"=ProductPatchType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\product",
     *           "groups" ={"product"}}
     *
     * )
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Put("/products/{barcode}")
     */
    public function updateProductAction(Request $request, $clearMissing = true)
    {
        $em=$this->getDoctrine()->getManager();
        $product = $em
            ->getRepository('AppBundle:Product')
            ->findOneByBarcode($request->get('barcode'));

        if (empty($product)) {
            return \FOS\RestBundle\View\View::create(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
        }
        $form = $this->createForm(ProductPatchType::class, $product);
        $form->submit($request->request->all(), $clearMissing);
        if ($form->isValid()) {
            $em->merge($product);
            $em->flush();
            return $product;
        } else {
            return $form;
        }
    }

    /**
     *  This URL aims to patch a product's information (admin only).
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
     *  section="products",
     *  description="Patch a product (admin only)",
     *  input={"class"=ProductPatchType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\product",
     *           "groups" ={"product"}}
     *
     * )
     * @Rest\View(serializerGroups={"product"})
     * @Rest\Patch("/admin/products/{barcode}")
     */
    public function patchProductAction(Request $request)
    {
        return $this->updateProductAction($request, false);
    }

    /**
     *  This URL aims to delete a product (admin only).
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
     *  section="products",
     *  description="Delete a product (admin only)",
     *  output={"class"="AppBundle\Entity\product",
     *           "groups" ={"product"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"product"})
     * @Rest\Delete("/admin/products/{barcode}")
     */
    public function removeProductAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $product = $em->getRepository('AppBundle:Product')
            ->findOneByBarcode($request->get('barcode'));

        /* @var $product Product */
        if ($product) {
            if($product->isIsRemoved()){
                return \FOS\RestBundle\View\View::create(['message' => 'Product already deleted'], Response::HTTP_BAD_REQUEST);

            }
            $product->setIsRemoved(true);
            $em->merge($product);
            $em->flush();
        }
        else{
            return \FOS\RestBundle\View\View::create(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);

        }
    }
}
