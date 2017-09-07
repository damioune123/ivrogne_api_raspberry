<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLine
 *
 * @ORM\Table(name="order_lines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderLineRepository")
 */
class OrderLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", nullable=false, type="integer")
     */
    private $quantity;

    /**
     * @var Order
     *
     * @ORM\JoinColumn(name="customer_order", nullable=false,  referencedColumnName="id",onDelete="CASCADE")
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="orderLines", cascade={"remove", "persist"})
     *
     */
    private $order;

    /**
     * @var Product
     *
     * @ORM\JoinColumn(name="product",  referencedColumnName="barcode",onDelete="SET NULL")
     * @ORM\ManyToOne(targetEntity="Product", cascade={"remove", "persist"})
     */
    private $product;

    /**
     * @var float
     *
     * @ORM\Column(name="orderline_during_order_price", type="float")
     */
    private $orderLineDuringOrderPrice=0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="product_during_order_price_user", type="float")
     */
    private $productDuringOrderPriceUser=0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="product_during_order_price_admin", type="float")
     */
    private $productDuringOrderPriceAdmin=0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="product_during_order_real_price", type="float")
     */
    private $productDuringOrderRealPrice=0.0;

    

    /**
     * OrderLine constructor.
     *
     */
    public function __construct()
    {
        $this->quantity = 1;

    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OrderLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return float
     */
    public function getOrderLineDuringOrderPrice()
    {
        return $this->orderLineDuringOrderPrice;
    }

    /**
     * @param float $orderLineDuringOrderPrice
     */
    public function setOrderLineDuringOrderPrice($orderLineDuringOrderPrice)
    {
        $this->orderLineDuringOrderPrice = $orderLineDuringOrderPrice;
    }

    /**
     * @return float
     */
    public function getProductDuringOrderPriceUser()
    {
        return $this->productDuringOrderPriceUser;
    }

    /**
     * @param float $productDuringOrderPriceUser
     */
    public function setProductDuringOrderPriceUser($productDuringOrderPriceUser)
    {
        $this->productDuringOrderPriceUser = $productDuringOrderPriceUser;
    }

    /**
     * @return float
     */
    public function getProductDuringOrderPriceAdmin()
    {
        return $this->productDuringOrderPriceAdmin;
    }

    /**
     * @param float $productDuringOrderPriceAdmin
     */
    public function setProductDuringOrderPriceAdmin($productDuringOrderPriceAdmin)
    {
        $this->productDuringOrderPriceAdmin = $productDuringOrderPriceAdmin;
    }

    /**
     * @return float
     */
    public function getProductDuringOrderRealPrice()
    {
        return $this->productDuringOrderRealPrice;
    }

    /**
     * @param float $productDuringOrderRealPrice
     */
    public function setProductDuringOrderRealPrice($productDuringOrderRealPrice)
    {
        $this->productDuringOrderRealPrice = $productDuringOrderRealPrice;
    }


    public function setDuringOrderPrices(){
        $this->orderLineDuringOrderPrice=$this->getOrderLinePriceFinal();
        $this->productDuringOrderPriceUser=$this->product->getPriceWithPromotionUser();
        $this->productDuringOrderPriceAdmin=$this->product->getPriceWithPromotionAdmin();
        $this->productDuringOrderRealPrice=$this->product->getProductRealPrice();
    }


    /**
     * @return float
     *
     */

    public function getOrderLinePriceAdmin()
    {
        return floatval($this->quantity * $this->product->getPriceWithPromotionAdmin());
    }

    /**
     * @return float
     *
     */

    public function getOrderLinePriceUser()
    {
        return floatval($this->quantity * $this->product->getPriceWithPromotionUser());
    }

    /**
     * @return float
     *
     */

    public function getOrderLinePriceFinal()
    {
        if(empty($this->getOrder()))
            return;
        if($this->getOrder()->getCustomerUserAccount()->getUser()->getRole()=="ROLE_USER" ||$this->getOrder()->getCustomerUserAccount()->getUser()->getRole()=="ROLE_BARMAN")
            return floatval($this->quantity * $this->product->getPriceWithPromotionUser());
        else
            return floatval($this->quantity * $this->product->getPriceWithPromotionAdmin());
    }





}

