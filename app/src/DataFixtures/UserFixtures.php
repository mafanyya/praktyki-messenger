<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@admin.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin,'admin'));
        $admin->setCountry('USA');
        $admin->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/tyler-nix-PQeoQdkU9jQ-300x300.jpg');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setBirthdate('30 February');
        $manager->persist($admin);

        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@user.com');
        $user->setPassword($this->passwordHasher->hashPassword($user,'user'));
        $user->setCountry('USA');
        $user->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/robert-godwin-cdksyTqEXzo-300x300.jpg');
        $user->setRoles(['ROLE_USER']);
        $user->setBirthdate('1 January');
        $manager->persist($user);


        $user2 = new User();
        $user2->setUsername('garry');
        $user2->setEmail('garry@user.com');
        $user2->setPassword($this->passwordHasher->hashPassword($user,'garry'));
        $user2->setCountry('Japan');
        $user2->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/philipe-cavalcante-xe68QiMaDrQ-2-300x300.jpg');
        $user2->setRoles(['ROLE_USER']);
        $user2->setBirthdate('15 March');
        $manager->persist($user2);

        $user3 = new User();
        $user3->setUsername('redshock');
        $user3->setEmail('redshock@user.com');
        $user3->setPassword($this->passwordHasher->hashPassword($user,'redshock'));
        $user3->setCountry('Bolivia');
        $user3->setAvatar('https://userstock.io/data/wp-content/uploads/2020/05/warren-wong-VVEwJJRRHgk-300x300.jpg');
        $user3->setRoles(['ROLE_USER']);
        $user3->setBirthdate('12 November');
        $manager->persist($user3);


        $user4 = new User();
        $user4->setUsername('maradonner');
        $user4->setEmail('maradonner@user.com');
        $user4->setPassword($this->passwordHasher->hashPassword($user,'maradonner'));
        $user4->setCountry('Canada');
        $user4->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/nick-karvounis-75432-300x300.jpg');
        $user4->setRoles(['ROLE_USER']);
        $user4->setBirthdate('7 July');
        $manager->persist($user4);

        $user = new User();
        $user->setUsername('ouster');
        $user->setEmail('ouster@user.com');
        $user->setPassword($this->passwordHasher->hashPassword($user,'ouster'));
        $user->setCountry('Bulgaria');
        $user->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/ilaya-raja-280339-300x300.jpg');
        $user->setRoles(['ROLE_USER']);
        $user->setBirthdate('2 September');
        $manager->persist($user);

        $user5 = new User();
        $user5->setUsername('impplant');
        $user5->setEmail('impplant@user.com');
        $user5->setPassword($this->passwordHasher->hashPassword($user,'impplant'));
        $user5->setCountry('Brazil');
        $user5->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/lesly-b-juarez-276953-300x300.jpg');
        $user5->setRoles(['ROLE_USER']);
        $user5->setBirthdate('19 March');
        $manager->persist($user5);

        $user6 = new User();
        $user6->setUsername('marcantony');
        $user6->setEmail('marcantony@user.com');
        $user6->setPassword($this->passwordHasher->hashPassword($user,'marcantony'));
        $user6->setCountry('Iceland');
        $user6->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/tamarcus-brown-266128-300x300.jpg');
        $user6->setRoles(['ROLE_USER']);
        $user6->setBirthdate('16 December');
        $manager->persist($user6);

        $user7 = new User();
        $user7->setUsername('treecher');
        $user7->setEmail('treecher@user.com');
        $user7->setPassword($this->passwordHasher->hashPassword($user,'treecher'));
        $user7->setCountry('Russia');
        $user7->setAvatar('https://userstock.io/data/wp-content/uploads/2020/05/eye-for-ebony-OeXcIHFwtsM-unsplash-300x300.jpg');
        $user7->setRoles(['ROLE_USER']);
        $user7->setBirthdate('1 April');
        $manager->persist($user7);

        $user8 = new User();
        $user8->setUsername('endocryne');
        $user8->setEmail('endocryne@user.com');
        $user8->setPassword($this->passwordHasher->hashPassword($user,'endocryne'));
        $user8->setCountry('Israel');
        $user8->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/zi-jian-lim-218410-300x300.jpg');
        $user8->setRoles(['ROLE_USER']);
        $user8->setBirthdate('30 May');
        $manager->persist($user8);

        $user9 = new User();
        $user9->setUsername('prysm');
        $user9->setEmail('prysm@user.com');
        $user9->setPassword($this->passwordHasher->hashPassword($user,'prysm'));
        $user9->setCountry('Italy');
        $user9->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/pexels-photo-26939-1-300x300.jpg');
        $user9->setRoles(['ROLE_USER']);
        $user9->setBirthdate('20 June');
        $manager->persist($user9);

        $user10 = new User();
        $user10->setUsername('bibliokiller');
        $user10->setEmail('bibliokiller@user.com');
        $user10->setPassword($this->passwordHasher->hashPassword($user,'bibliokiller'));
        $user10->setCountry('Poland');
        $user10->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/yegide-matthews-60888-300x300.jpg');
        $user10->setRoles(['ROLE_USER']);
        $user10->setBirthdate('12 August');
        $manager->persist($user10);

        $user11 = new User();
        $user11->setUsername('vuvuka');
        $user11->setEmail('vuvuka@user.com');
        $user11->setPassword($this->passwordHasher->hashPassword($user,'vuvuka'));
        $user11->setCountry('Poland');
        $user11->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/yegide-matthews-60888-300x300.jpg');
        $user11->setRoles(['ROLE_USER']);
        $user11->setBirthdate('13 August');
        $manager->persist($user11);


        $manager->flush();
    }

}