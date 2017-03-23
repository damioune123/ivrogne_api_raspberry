<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=150)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=150)
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=190, unique=true)
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=150)
     */
    protected $password;

    /**
     * @var string
     *
     *
     */
    protected $plainPassword;

    /**
     * @ORM\Column(name="role", type="string",length=150)
     */
    private $role;

    /**
     * @var array
     */
    private $roles;


    /**
     * @var ArrayCollection|UserAccount[]
     *
     * @ORM\OneToMany(targetEntity="UserAccount", mappedBy="user", orphanRemoval=true)
     */
     private $userAccounts;

    /**
     * @var string
     *
     * @ORM\Column(name="rfid_card", type="string", length=150, nullable=true, unique=true)
     */
    private $rfidCard;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var ArrayCollection|AuthToken[]
     *
     *@ORM\OneToMany(targetEntity="AuthToken", mappedBy="user", orphanRemoval=true)
     */
    private $authTokens;

    /**
     * @var ArrayCollection|User[]
     *
     *@ORM\OneToMany(targetEntity="User", mappedBy="godfather")
     */
    private $nefews;

    /**
     * @var User
     *
     * @ORM\JoinColumn(name="godfather", referencedColumnName="id", onDelete="SET NULL", nullable=true)
     * @ORM\ManyToOne(targetEntity="User", inversedBy="nefews",  cascade={"persist"})
     */
    private $godfather;
    /**
     * @var Promotion
     *
     * @ORM\JoinColumn(name="promotion", referencedColumnName="id",onDelete="SET NULL", nullable=true)
     * @ORM\ManyToOne(targetEntity="Promotion",  cascade={"persist"})
     */
    private $promotion;
    /**
     * @var float
     *
     * @ORM\Column(name="money_limit", type="float")
     */
    private $moneyLimit;


    /**
     * User constructor.
     *
     */
    public function __construct()
    {
        $this->userAccounts  = new ArrayCollection();
        $this->authTokens  = new ArrayCollection();
        $this->nefews  = new ArrayCollection();
        $this->moneyLimit  = 0.0;
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set userName
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param string $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    public function setRoles($role)
    {
       $this->roles=array($role);
        $this->role=$role;
    }


    public function getRoles()
    {
        return $this->roles;
    }

    public function getSalt()
    {
        return null;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function eraseCredentials()
    {
        // Suppression des données sensibles
        $this->plainPassword = null;
    }

    /**
     * @return UserAccount[]|ArrayCollection
     */
    public function getUserAccounts()
    {
        return $this->userAccounts;
    }

    /**
     * @param UserAccount[]|ArrayCollection $userAccounts
     */
    public function setUserAccounts($userAccounts)
    {
        $this->userAccounts = $userAccounts;
    }

    /**
     * @return string
     */
    public function getRfidCard()
    {
        return $this->rfidCard;
    }

    /**
     * @param string $rfidCard
     */
    public function setRfidCard($rfidCard)
    {
        $this->rfidCard = $rfidCard;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
        $this->roles=array($role);
    }

    /**
     * @return AuthToken[]|ArrayCollection
     */
    public function getAuthTokens()
    {
        return $this->authTokens;
    }

    /**
     * @param AuthToken[]|ArrayCollection $authTokens
     */
    public function setAuthTokens($authTokens)
    {
        $this->authTokens = $authTokens;
    }

    /**
     * @return User[]|ArrayCollection
     */
    public function getNefews()
    {
        return $this->nefews;
    }

    /**
     * @param User[]|ArrayCollection $nefews
     */
    public function setNefews($nefews)
    {
        $this->nefews = $nefews;
    }

    /**
     * @return User
     */
    public function getGodfather()
    {
        return $this->godfather;
    }

    /**
     * @param User $godfather
     */
    public function setGodfather($godfather)
    {
        $this->godfather = $godfather;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    
    


}

