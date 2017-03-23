<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\OrderLine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\MoneyFlow;
use AppBundle\Entity\UserAccount;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadMoneyFlowData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       

    }
    public function getOrder()
    {
        return 6;
    }
}