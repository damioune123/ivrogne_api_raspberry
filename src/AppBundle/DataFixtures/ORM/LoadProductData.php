<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('Autre');
        $product->setProductCategory($this->getReference('rodeo_cara'));
        $product->setBarcode('00000');
        $manager->persist($product);
        $this->setReference('autre-1',$product);

        $product = new Product();
        $product->setName('Autre');
        $product->setBarcode('11111');
        $product->setProductCategory($this->getReference('pils_25cl'));
        $manager->persist($product);
        $this->setReference('autre-2',$product);

        $product = new Product();
        $product->setName('Autre');
        $product->setBarcode('22222');
        $product->setProductCategory($this->getReference('spe_25cl'));
        $manager->persist($product);
        $this->setReference('autre-3',$product);

        $product = new Product();
        $product->setName('Autre');
        $product->setBarcode('33333');
        $product->setProductCategory($this->getReference('spe_33cl'));
        $manager->persist($product);
        $this->setReference('autre-4',$product);

        $product = new Product();
        $product->setName('Autre');
        $product->setBarcode('44444');
        $product->setProductCategory($this->getReference('spe_33cl_plus'));
        $manager->persist($product);
        $this->setReference('autre-5',$product);

        $product = new Product();
        $product->setName('Autre');
        $product->setBarcode('55555');
        $product->setProductCategory($this->getReference('alcool_cl'));
        $manager->persist($product);
        $this->setReference('autre-6',$product);

        $product = new Product();
        $product->setName('Leffe');
        $product->setBarcode('66666');
        $product->setProductCategory($this->getReference('spe_25cl'));
        $manager->persist($product);
        $this->setReference('Leffe',$product);

        $product = new Product();
        $product->setName('cara');
        $product->setBarcode('77777');
        $product->setProductCategory($this->getReference('rodeo_cara'));
        $manager->persist($product);
        $this->setReference('cara',$product);

        $product = new Product();
        $product->setName('maes');
        $product->setBarcode('88888');
        $product->setProductCategory($this->getReference('pils_25cl'));
        $manager->persist($product);
        $this->setReference('maes',$product);

        $product = new Product();
        $product->setName('hoegaarden');
        $product->setBarcode('99999');
        $product->setProductCategory($this->getReference('pils_25cl'));
        $manager->persist($product);
        $this->setReference('hoegaarden',$product);

        $product = new Product();
        $product->setName('barbare');
        $product->setBarcode('98989');
        $product->setProductCategory($this->getReference('spe_33cl'));
        $manager->persist($product);
        $this->setReference('barbare',$product);


        $manager->flush();

    }
    public function getOrder()
    {
        return 3;
    }
}