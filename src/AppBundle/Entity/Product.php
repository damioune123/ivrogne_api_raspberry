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
    private $amountAvailableInStock=0;

    /**
     * @var float
     *
     * @ORM\Column(name="product_promotion_admin", type="float")
     */
    private $productPromotionAdmin=0.0;
    /**
     * @var float
     *
     * @ORM\Column(name="product_promotion_user", type="float")
     */
    private $productPromotionUser=0.0;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_removed", type="boolean")
     */
    private $isRemoved = false;



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
     * @return bool
     */
    public function isIsRemoved()
    {
        return $this->isRemoved;
    }

    /**
     * @param bool $isRemoved
     */
    public function setIsRemoved($isRemoved)
    {
        $this->isRemoved = $isRemoved;
    }

    /**
     * @return float
     */
    public function getProductPromotionAdmin()
    {
        return $this->productPromotionAdmin;
    }

    /**
     * @param float $productPromotionAdmin
     */
    public function setProductPromotionAdmin($productPromotionAdmin)
    {
        $this->productPromotionAdmin = $productPromotionAdmin;
    }

    /**
     * @return float
     */
    public function getProductPromotionUser()
    {
        return $this->productPromotionUser;
    }

    /**
     * @param float $productPromotionUser
     */
    public function setProductPromotionUser($productPromotionUser)
    {
        $this->productPromotionUser = $productPromotionUser;
    }



    /**
     * @return float
     */

    public function getPriceWithPromotionAdmin(){
        $raw_price= $this->getProductCategory()->getPrice();
        return ($raw_price/100)*((100-$this->productPromotionAdmin)*100)/100;
    }
    /**
     * @return float
     */

    public function getPriceWithPromotionUser(){
        $raw_price= $this->getProductCategory()->getPrice();
        return ($raw_price/100)*((100-$this->productPromotionUser)*100)/100;
    }
    
    
}

