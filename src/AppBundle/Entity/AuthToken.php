<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * AuthToken
 *
 * @ORM\Table(name="auth_tokens")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuthTokenRepository")
 *
 */
class AuthToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=191)
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="User", inversedBy="authTokens", cascade={"remove", "persist"})
     * @var User
     *
     */
    protected $user;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_log_with_rfid", type="boolean")
     */
    private $isLogWithRfid;
    /**
     *
     * @var string
     *
     */
    private $exception;
    /**
     *
     * @var source
     *
     */
    private $source;


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
     * Set value
     *
     * @param string $value
     *
     * @return AuthToken
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string
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
     * @return AuthToken
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
     * @return boolean
     */
    public function isIsLogWithRfid()
    {
        return $this->isLogWithRfid;
    }

    /**
     * @param boolean $isLogWithRfid
     */
    public function setIsLogWithRfid($isLogWithRfid)
    {
        $this->isLogWithRfid = $isLogWithRfid;
    }
    /**
     * @return mixed
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @param mixed $exception
     */
    public function setException($exception)
    {
        $this->exception = $exception;
    }

    /**
     * @return source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param source $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }



}
