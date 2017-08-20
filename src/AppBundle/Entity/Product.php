<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="barcode", type="string", length=255, nullable=false, unique=true)
     */
    private $barcode;

    /**
     * @var ProductCategory
     *
     * @ORM\JoinColumn(name="product_category", referencedColumnName="id",onDelete="SET NULL")
     * @ORM\ManyToOne(targetEntity="ProductCategory", inversedBy="products",  cascade={"persist"})
     * */

    private $productCategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $amountAvailableInStock;

    /**
     * @var Promotion
     *
     * @ORM\JoinColumn(name="promotion", referencedColumnName="id",onDelete="SET NULL", nullable=true)
     * @ORM\ManyToOne(targetEntity="Promotion",  cascade={"persist"})
     */
     private $promotion;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return Product
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    
        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @return ProductCategory
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param ProductCategory $productCategory
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @return int
     */
    public function getAmountAvailableInStock()
    {
        return $this->amountAvailableInStock;
    }

    /**
     * @param int $amountAvailableInStock
     */
    public function setAmountAvailableInStock($amountAvailableInStock)
    {
        $this->amountAvailableInStock = $amountAvailableInStock;
    }
    /**
     * @return Promotion
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param Promotion $promotion
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;
    }
    
    
    
}

