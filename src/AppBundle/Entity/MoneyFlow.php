<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoneyFlow
 *
 * @ORM\Table(name="money_flow")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MoneyFlowRepository")
 * @ORM\HasLifecycleCallbacks
 */
class MoneyFlow
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
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var UserAccount
     *
     * @ORM\JoinColumn(name="debit_user_account", referencedColumnName="id",nullable=true, onDelete="SET NULL")
     * @ORM\ManyToOne(targetEntity="UserAccount", inversedBy="positiveMoneyFlows",cascade={"persist"})
     */
    private $debitUserAccount;

    /**
     * @var UserAccount
     *
     * @ORM\JoinColumn(name="credit_user_account", referencedColumnName="id",nullable=true, onDelete="SET NULL")
     * @ORM\ManyToOne(targetEntity="UserAccount", inversedBy="negativeMoneyFlows", cascade={"persist"})
     */
    private $creditUserAccount;

    /**
     * @var boolean
     * @ORM\Column(name="isCancelled", type="boolean")
     */
    private $isCancelled;

    /**
     * MoneyFlow constructor.
     *
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime('now');
        $this->isCancelled=false;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param float $value
     *
     * @return MoneyFlow
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return MoneyFlow
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return UserAccount
     */
    public function getDebitUserAccount()
    {
        return $this->debitUserAccount;
    }

    /**
     * @param UserAccount $debitUserAccount
     */
    public function setDebitUserAccount($debitUserAccount)
    {
        $this->debitUserAccount = $debitUserAccount;
    }

    /**
     * @return UserAccount
     */
    public function getCreditUserAccount()
    {
        return $this->creditUserAccount;
    }

    /**
     * @param UserAccount $creditUserAccount
     */
    public function setCreditUserAccount($creditUserAccount)
    {
        $this->creditUserAccount = $creditUserAccount;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIsCancelled()
    {
        return $this->isCancelled;
    }

    /**
     * @param mixed $isCancelled
     */
    public function setIsCancelled($isCancelled)
    {
        $this->isCancelled = $isCancelled;
    }
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function debitAndCreditAccounts()
    {
        $newCreditMoneyBalance = $this->creditUserAccount->getMoneyBalance() - $this->value;
        $newDebitMoneyBalance = $this->debitUserAccount->getMoneyBalance() + $this->value;
        $this->creditUserAccount->setMoneyBalance($newCreditMoneyBalance);
        $this->debitUserAccount->setMoneyBalance($newDebitMoneyBalance);
    }

    /**
     * @return string
     */
    public function getDebitUserDetails(){
        if($this->debitUserAccount->getType()=="lost"){
            $firstName="compte";
            $lastName="perte/vol";
        }
        else if($this->debitUserAccount->getType()=="spending"){
            $firstName="compte";
            $lastName="achat de marchandises";
        }
        else{
            $firstName= strval($this->debitUserAccount->getUser()->getFirstname());
            $lastName = strval($this->debitUserAccount->getUser()->getLastname());
        }

       return $firstName." ".$lastName;
    }
    /**
     * @return string
     */
    public function getCreditUserDetails(){
        $firstName= $this->creditUserAccount->getUser()->getFirstname();
        $lastName = $this->creditUserAccount->getUser()->getLastname();
        return $firstName." ".$lastName;
    }



}

