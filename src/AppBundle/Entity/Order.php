<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Order
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderRepository")
 * @ORM\HasLifecycleCallbacks
 *
 */
class Order
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
     * @var ArrayCollection|OrderLine[]
     *
     * @ORM\OneToMany(targetEntity="OrderLine", mappedBy="order", orphanRemoval=true)
     */
    private $orderLines;

    /**
     * @var UserAccount
     *
     * @ORM\JoinColumn(name="customer_user_account",  referencedColumnName="id", nullable=true,onDelete="SET NULL")
     * @ORM\ManyToOne(targetEntity="UserAccount", inversedBy="orders", cascade={ "persist"})
     */
    private $customerUserAccount;

    /**
     * @var UserAccount
     *
     * @ORM\JoinColumn(name="cash_register_account",  referencedColumnName="id", nullable=true,onDelete="SET NULL")
     * @ORM\ManyToOne(targetEntity="UserAccount", inversedBy="registerOrders", cascade={"persist"})
     */
    private $registerAccount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_paid_cash", type="boolean")
     */
     private $isPaidCash;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;
    /**
     * @var boolean
     * @ORM\Column(name="isCancelled", type="boolean")
     */
    private $isCancelled;
    /**
     *
     * @var boolean
     * @ORM\Column(name="isOrderedByCustomer", type="boolean")
     */
    private $isOrderedByCustomer;

    /**
     * @var float
     *
     * @ORM\Column(name="during_order_price", type="float")
     */
    private $duringOrderPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="during_order_global_promotion", type="float")
     */
    private $duringOrderGlobalPromotion;


    /**
     * Order constructor.
     */
    public function __construct()
    {
        $this->orderLines  = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->isCancelled = false;
        $this->isOrderedByCustomer = false;
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
     * @return OrderLine[]|ArrayCollection
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLine[]|ArrayCollection $orderLines
     */
    public function setOrderLines($orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @return UserAccount
     */
    public function getCustomerUserAccount()
    {
        return $this->customerUserAccount;
    }

    /**
     * @param UserAccount $userAccount
     */
    public function setCustomerUserAccount($customerUserAccount)
    {
        $this->customerUserAccount = $customerUserAccount;
    }

    /**
     * @return float
     */
    public function getOrderPrice()
    {
        if($this->getDuringOrderPrice()==0){
            $this->setDuringOrderPrice();
        }
       return $this->getDuringOrderPrice();
    }

    /**
     * @return boolean
     */
    public function isPaidCash()
    {
        return $this->isPaidCash;
    }

    /**
     * @param boolean $isPaidCash
     */
    public function setIsPaidCash($isPaidCash)
    {
        $this->isPaidCash = $isPaidCash;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return UserAccount
     */
    public function getRegisterAccount()
    {
        return $this->registerAccount;
    }

    /**
     * @param UserAccount $registerAccount
     */
    public function setregisterAccount($registerAccount)
    {
        $this->registerAccount = $registerAccount;
    }

    /**
     * @return boolean
     */
    public function isIsCancelled()
    {
        return $this->isCancelled;
    }

    /**
     * @param boolean $isCancelled
     */
    public function setIsCancelled($isCancelled)
    {
        $this->isCancelled = $isCancelled;
    }

    /**
     * @return mixed
     */
    public function getIsOrderedByCustomer()
    {
        return $this->isOrderedByCustomer;
    }

    /**
     * @param mixed $isOrderedByCustomer
     */
    public function setIsOrderedByCustomer($isOrderedByCustomer)
    {
        $this->isOrderedByCustomer = $isOrderedByCustomer;
    }

    /**
     * @return float
     */
    public function getDuringOrderGlobalPromotion()
    {
        return $this->duringOrderGlobalPromotion;
    }

    /**
     * @param float $duringOrderGlobalPromotion
     */
    public function setDuringOrderGlobalPromotion($duringOrderGlobalPromotion)
    {
        $this->duringOrderGlobalPromotion = $duringOrderGlobalPromotion;
    }




    /**
     * @return float
     */
    public function getDuringOrderPrice()
    {
        return $this->duringOrderPrice;
    }


    public function setDuringOrderPrice()
    {
        $price = 0.0;
        $this->setDuringOrderGlobalPromotion($this->customerUserAccount->getUser()->getPromotion()->getUserPromotion());
        foreach ($this->orderLines as $orderLine)
        {
            if($this->customerUserAccount->getUser()->getRole()=="ROLE_USER" ||$this->customerUserAccount->getUser()->getRole()=="ROLE_BARMAN"  ){

                $price += $orderLine->getOrderLinePriceUser();
            }
            else{
                $price += $orderLine->getOrderLinePriceAdmin();
            }

        }
        if(!$this->isPaidCash())
            $promotionCoef= (100.0-$this->customerUserAccount->getUser()->getPromotion()->getUserPromotion())/100;
        else $promotionCoef=1.0;
            $price = $price * $promotionCoef;
        $this->duringOrderPrice= $price;

    }

    


    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function creditOrder()
    {

            $price= $this->getOrderPrice();
            $currentMoneyBalance = $this->customerUserAccount->getMoneyBalance();
            $newMoneyBalance = $currentMoneyBalance - $price;
            $this->customerUserAccount->setMoneyBalance($newMoneyBalance);

            $currentBankMoneyBalance = $this->registerAccount->getMoneyBalance();
            $newBankMoneyBalance = $currentBankMoneyBalance + $price;
            $this->registerAccount->setMoneyBalance($newBankMoneyBalance);
            foreach($this->getOrderLines() as $orderline){
                $quantity = $orderline->getQuantity();
                $product = $orderline->getProduct();
                $old = $product->getAmountAvailableInStock();
                $product->setAmountAvailableInStock($old-$quantity);
            }

    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function cancelCreditOrder()
    {
            $currentMoneyBalance = $this->customerUserAccount->getMoneyBalance();
            $newMoneyBalance = $currentMoneyBalance + $this->getOrderPrice();
            $this->customerUserAccount->setMoneyBalance($newMoneyBalance);

            $currentBankMoneyBalance = $this->registerAccount->getMoneyBalance();
            $newBankMoneyBalance = $currentBankMoneyBalance - $this->getOrderPrice();
            $this->registerAccount->setMoneyBalance($newBankMoneyBalance);
        foreach($this->getOrderLines() as $orderline){
            $quantity = $orderline->getQuantity();
            $product = $orderline->getProduct();
            $old = $product->getAmountAvailableInStock();
            $product->setAmountAvailableInStock($old+$quantity);
        }

    }
    /**
     * @return string
     */
    public function getCustomerDetails()
    {
        $firstName = $this->customerUserAccount->getUser()->getFirstname();
        $lastName = $this->customerUserAccount->getUser()->getLastname();
        return $firstName." ".$lastName;
    }
}

