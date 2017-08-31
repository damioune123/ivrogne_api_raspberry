<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * UserAccount
 *
 * @ORM\Table(name="user_accounts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserAccountRepository")
 *
 */
class UserAccount
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
     * @var string
     * @Assert\Choice({"somebody", "bank", "cash-register","lost","spending"})
     * @ORM\Column(name="type", type="string", length=150)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="money_balance", type="float")
     *
     */
    private $moneyBalance =0.0;

    /**
     * @var User
     *
     * @ORM\JoinColumn(name="user", referencedColumnName="id",onDelete="CASCADE", nullable=true)
     * @ORM\ManyToOne(targetEntity="User", inversedBy="users",  cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @var ArrayCollection|Order[]
     *
     * @ORM\OneToMany(targetEntity="Order", mappedBy="customerUserAccount")
     */
    private $orders;

    /**
     * @var ArrayCollection|Order[]
     *
     * @ORM\OneToMany(targetEntity="Order", mappedBy="registerAccount")
     */
    private $registerOrders;

    /**
     * @var ArrayCollection|MoneyFlow[]
     *
     * @ORM\OneToMany(targetEntity="MoneyFlow", mappedBy="debitUserAccount")
     */
    private $positiveMoneyFlows;

    /**
     * @var ArrayCollection|MoneyFlow[]
     *
     * @ORM\OneToMany(targetEntity="MoneyFlow", mappedBy="creditUserAccount")
     */
    private $negativeMoneyFlows;
    /**
     * @var float
     *
     * @ORM\Column(name="money_limit", type="float")
     */
    private $moneyLimit = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_to_allow_max", type="float")
     */
    private $creditToAllowMax = 200.0;

    /**
     * @var float
     *
     * @ORM\Column(name="credit_allowed", type="float")
     */
    private $creditAllowed = 0.0;

    /**
     * UserAccount constructor.
     *
     */
    public function __construct()
    {
        $this->orders  = new ArrayCollection();
        $this->registerOrders = new ArrayCollection();
        $this->positiveMoneyFlows = new ArrayCollection();
        $this->negativeMoneyFlows = new ArrayCollection();

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
     * Set type
     *
     * @param string $type
     *
     * @return UserAccount
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set moneyBalance
     *
     * @param float $moneyBalance
     *
     * @return UserAccount
     */
    public function setMoneyBalance($moneyBalance)
    {
        $this->moneyBalance = $moneyBalance;
    
        return $this;
    }

    /**
     * Get moneyBalance
     *
     * @return float
     */
    public function getMoneyBalance()
    {
        return $this->moneyBalance;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return Order[]|ArrayCollection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Order[]|ArrayCollection $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }

    /**
     * @return MoneyFlow[]|ArrayCollection
     */
    public function getPositiveMoneyFlows()
    {
        return $this->positiveMoneyFlows;
    }

    /**
     * @param MoneyFlow[]|ArrayCollection $positiveMoneyFlows
     */
    public function setPositiveMoneyFlows($positiveMoneyFlows)
    {
        $this->positiveMoneyFlows = $positiveMoneyFlows;
    }

    /**
     * @return MoneyFlow[]|ArrayCollection
     */
    public function getNegativeMoneyFlows()
    {
        return $this->negativeMoneyFlows;
    }

    /**
     * @param MoneyFlow[]|ArrayCollection $negativeMoneyFlows
     */
    public function setNegativeMoneyFlows($negativeMoneyFlows)
    {
        $this->negativeMoneyFlows = $negativeMoneyFlows;
    }

    /**
     * @return Order[]|ArrayCollection
     */
    public function getRegisterOrders()
    {
        return $this->registerOrders;
    }

    /**
     * @param Order[]|ArrayCollection $registerOrders
     */
    public function setCashRegisterOrders($registerOrders)
    {
        $this->registerOrders = $registerOrders;
    }

    /**
     * @return float
     */
    public function getCreditToAllowMax()
    {
        return $this->creditToAllowMax;
    }

    /**
     * @param float $creditToAllowMax
     */
    public function setCreditToAllowMax($creditToAllowMax)
    {
        $this->creditToAllowMax = $creditToAllowMax;
    }

    /**
     * @return float
     */
    public function getCreditAllowed()
    {
        return $this->creditAllowed;
    }

    /**
     * @param float $creditAllowed
     */
    public function setCreditAllowed($creditAllowed)
    {
        $this->creditAllowed = $creditAllowed;
    }
    /**
     * @return float
     */
    public function getMoneyLimit()
    {
        return $this->moneyLimit;
    }

    /**
     * @param float $moneyLimit
     */
    public function setMoneyLimit($moneyLimit)
    {
        $this->moneyLimit = $moneyLimit;
    }
    /**
     * @return float
     */
    public function getAvailableBalance()
    {
        if($this->type=="lost" or $this->type=="spending"){
            return;
        }
        if ($this->getUser()->getRole() == "ROLE_ADMIN" or $this->getUser()->getRole() == "ROLE_SUPER_ADMIN") {
            return round($this->getMoneyBalance() + ($this->getCreditToAllowMax() - $this->getCreditAllowed()),2);
        } else if ($this->getUser()->getRole() == "ROLE_BARMAN")
        {
            return 0.0;
        }
        else if($this->getUser()->getRole()=="ROLE_USER")
        {
            return round($this->getMoneyBalance()+$this->getMoneyLimit(),2);
        }

    }



}

