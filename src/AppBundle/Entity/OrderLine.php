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
     *
     */

    public function getOrderLinePrice()
    {
        return floatval($this->quantity * $this->product->getProductCategory()->getPrice());
    }




    
}

