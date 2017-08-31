<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\UserAccount;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadUserAccountData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $userAccount=new UserAccount();
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setUser($this->getReference('barman-1'));
        $userAccount->setType("register");
        $manager->persist($userAccount);
        $this->setReference('cash-register-1', $userAccount);

        $userAccount=new UserAccount();
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setUser($this->getReference('barman-1'));
        $userAccount->setType("bank");
        $manager->persist($userAccount);
        $this->setReference('bank-1', $userAccount);

        $userAccount=new UserAccount();
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setType("lost");
        $manager->persist($userAccount);
        $this->setReference('lost-1', $userAccount);

        $userAccount=new UserAccount();
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setType("spending");
        $manager->persist($userAccount);
        $this->setReference('spending-1', $userAccount);

        $userAccount=new UserAccount();
        $userAccount->setUser($this->getReference('admin-1'));
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setType("somebody");
        $manager->persist($userAccount);
        $this->setReference('account-1', $userAccount);

        $userAccount=new UserAccount();
        $userAccount->setUser($this->getReference('admin-2'));
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setType("somebody");
        $manager->persist($userAccount);
        $this->setReference('account-2', $userAccount);


        $userAccount=new UserAccount();
        $userAccount->setUser($this->getReference('user-1'));
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setType("somebody");
        $manager->persist($userAccount);
        $this->setReference('account-3', $userAccount);

        $userAccount=new UserAccount();
        $userAccount->setUser($this->getReference('user-2'));
        $userAccount->setMoneyBalance(0.0);
        $userAccount->setType("somebody");
        $manager->persist($userAccount);
        $this->setReference('account-4', $userAccount);



        $manager->flush();
    }
    public function getOrder()
    {
        return 3;
    }
}