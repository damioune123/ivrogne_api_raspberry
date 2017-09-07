<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ProductCategory;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadProductCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $productCategory = new ProductCategory();
        $productCategory->setCategoryName('rodeo_cara');
        $productCategory->setPrice(0.5);
        $manager->persist($productCategory);
        $this->setReference('rodeo_cara', $productCategory);

        $productCategory = new ProductCategory();
        $productCategory->setCategoryName('pils_25cl');
        $productCategory->setPrice(1.0);
        $manager->persist($productCategory);
        $this->setReference('pils_25cl', $productCategory);

        $productCategory = new ProductCategory();
        $productCategory->setCategoryName('spe_25cl');
        $productCategory->setPrice(1.5);
        $manager->persist($productCategory);
        $this->setReference('spe_25cl', $productCategory);

        $productCategory = new ProductCategory();
        $productCategory->setCategoryName('spe_33cl');
        $productCategory->setPrice(2.0);
        $manager->persist($productCategory);
        $this->setReference('spe_33cl', $productCategory);

        $productCategory = new ProductCategory();
        $productCategory->setCategoryName('alcool_cl');
        $productCategory->setPrice(0.5);
        $manager->persist($productCategory);
        $this->setReference('alcool_cl', $productCategory);

        $manager->flush();

    }
    public function getOrder()
    {
        return 2;
    }
}