<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Promotion;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadPromotionData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $promotion= new Promotion();
        $promotion->setUserPromotion(0.0);
        $promotion->setPromotionName("simple");
        $manager->persist($promotion);
        $this->setReference('simple-promotion', $promotion);

        $promotion= new Promotion();
        $promotion->setUserPromotion(10.0);
        $promotion->setPromotionName("admin");
        $manager->persist($promotion);
        $this->setReference('admin-promotion', $promotion);
        $manager->flush();

    }
    public function getOrder()
    {
        return 1;
    }
}