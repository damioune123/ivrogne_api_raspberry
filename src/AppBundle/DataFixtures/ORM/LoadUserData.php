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
        $userSuperAdmin->setRfidCard('0');
        $userSuperAdmin->setUsername('superadmin');
        $userSuperAdmin->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $userSuperAdmin->setRole('ROLE_SUPER_ADMIN');
        $userSuperAdmin->setPromotion($this->getReference('admin-promotion'));
        $userSuperAdmin->setEmail('livrognebar@gmail.com');
        $userSuperAdmin->setGodfather(null);
        $manager->persist($userSuperAdmin);
        $this->setReference('super-admin-1', $userSuperAdmin);

        $userBarman = new User();
        $userBarman->setFirstname('bar');
        $userBarman->setLastname('man');
        $userBarman->setRfidCard('1');
        $userBarman->setUsername('barman');
        $userBarman->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $userBarman->setRole('ROLE_BARMAN');
        $userBarman->setPromotion($this->getReference('simple-promotion'));
        $userBarman->setEmail('livrognebar@gmail.com');
        $userBarman->setGodfather(null);
        $manager->persist( $userBarman);
        $this->setReference('barman-1',  $userBarman);

        $userAdmin1 = new User();
        $userAdmin1->setFirstname('Damien');
        $userAdmin1->setLastname('Meur');
        $userAdmin1->setRfidCard('2');
        $userAdmin1->setUsername('dams');
        $userAdmin1->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $userAdmin1->setRole('ROLE_ADMIN');
        $userAdmin1->setPromotion($this->getReference('admin-promotion'));
        $userAdmin1->setEmail('damienmeur@gmail.com');
        $userAdmin1->setGodfather(null);
        $manager->persist($userAdmin1);
        $this->setReference('admin-1', $userAdmin1);

        $userAdmin = new User();
        $userAdmin->setFirstname('Julien');
        $userAdmin->setLastname('Daniello');
        $userAdmin->setRfidCard('3');
        $userAdmin->setUsername('dan');
        $userAdmin->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $userAdmin->setRole('ROLE_ADMIN');
        $userAdmin->setPromotion($this->getReference('admin-promotion'));
        $userAdmin->setEmail('juliendaniello@gmail.com');
        $userAdmin->setGodfather(null);
        $manager->persist($userAdmin);
        $this->setReference('admin-2', $userAdmin);


        $user1 = new User();
        $user1->setFirstname('Nora');
        $user1->setLastname('Fallica');
        $user1->setRfidCard('4');
        $user1->setUsername('nono');
        $user1->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $user1->setRole('ROLE_USER');
        $user1->setPromotion($this->getReference('simple-promotion'));
        $user1->setEmail('no.fallica@gmail.com');
        $user1->setGodfather($userAdmin1);
        $manager->persist($user1);
        $this->setReference('user-1', $user1);

        $user2 = new User();
        $user2->setFirstname('John');
        $user2->setLastname('Doe');
        $user2->setRfidCard('5');
        $user2->setUsername('john_doe');
        $user2->setPassword('$2a$04$OPbUZDtSA8u5jvNrohpw5ei0CGnkiNcymg/azEgwh1.0X0dh58l8G');//azerty en bcrypt
        $user2->setRole('ROLE_USER');
        $user2->setPromotion($this->getReference('simple-promotion'));
        $user2->setEmail('no.fallica@gmail.com');
        $user2->setGodfather(null);
        $manager->persist($user2);
        $this->setReference('user-2', $user2);

        $manager->flush();

    }
    public function getOrder()
    {
        return 2;
    }
}