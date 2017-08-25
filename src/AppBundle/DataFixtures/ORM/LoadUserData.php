<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadUserDataextends extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $userSuperAdmin = new User();
        $userSuperAdmin->setFirstname('super');
        $userSuperAdmin->setLastname('admin');
        $userSuperAdmin->setRfidCard('000000');
        $userSuperAdmin->setUsername('admin');
        $userSuperAdmin->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $userSuperAdmin->setRole('ROLE_SUPER_ADMIN');
        $userSuperAdmin->setPromotion($this->getReference('admin-promotion'));
        $userSuperAdmin->setEmail('livrognebar@gmail.com');
        $userSuperAdmin->setGodfather(null);
        $manager->persist($userSuperAdmin);
        $this->setReference('super-admin-1', $userSuperAdmin);

        $manager->flush();

        $userBarman = new User();
        $userBarman->setFirstname('bar');
        $userBarman->setLastname('man');
        $userBarman->setRfidCard('111111');
        $userBarman->setUsername('barman');
        $userBarman->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $userBarman->setRole('ROLE_BARMAN');
        $userBarman->setPromotion($this->getReference('admin-promotion'));
        $userBarman->setEmail('livrognebar@gmail.com');
        $userBarman->setGodfather(null);
        $manager->persist( $userBarman);
        $this->setReference('barman-1',  $userBarman);

        $manager->flush();


    }
    public function getOrder()
    {
        return 2;
    }
}