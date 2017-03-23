<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * ProductCategory
 *
 * @ORM\Table(name="promotions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionRepository")
 */

class Promotion
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
     * @ORM\Column(name="user_promotion", type="float")
     */
    private $userPromotion;

    /**
     * @var float
     *
     * @ORM\Column(name="promotion_name", type="string", length=150, unique=true)
     */
    private $promotionName;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getUserPromotion()
    {
        return $this->userPromotion;
    }

    /**
     * @param float $userPromotion
     */
    public function setUserPromotion($userPromotion)
    {
        $this->userPromotion = $userPromotion;
    }

    /**
     * @return float
     */
    public function getPromotionName()
    {
        return $this->promotionName;
    }

    /**
     * @param float $promotionName
     */
    public function setPromotionName($promotionName)
    {
        $this->promotionName = $promotionName;
    }





}