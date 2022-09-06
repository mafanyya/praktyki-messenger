<?php

namespace App\DataFixtures;

use App\DataFixtures\HobbyFixtures;
use App\Entity\Hobby;
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
        $hobby1 = new Hobby();
        $hobby1->setName('Art');
        $hobby1->setImg('');
        $manager->persist($hobby1);



        $hobby2 = new Hobby();
        $hobby2->setName('Baking');
        $hobby2->setImg('');
        $manager->persist($hobby2);

        $hobby3 = new Hobby();
        $hobby3->setName('Beer tasting');
        $hobby3->setImg('');
        $manager->persist($hobby3);

        $hobby4 = new Hobby();
        $hobby4->setName('Candy making');
        $hobby4->setImg('');
        $manager->persist($hobby4);

        $hobby5 = new Hobby();
        $hobby5->setName('Chess');
        $hobby5->setImg('');
        $manager->persist($hobby5);

        $hobby6 = new Hobby();
        $hobby6->setName('Programming');
        $hobby6->setImg('');
        $manager->persist($hobby6);

        $hobby7 = new Hobby();
        $hobby7->setName('Cross stitch');
        $hobby7->setImg('');
        $manager->persist($hobby7);

        $hobby8 = new Hobby();
        $hobby8->setName('Dance');
        $hobby8->setImg('');
        $manager->persist($hobby8);

        $hobby9 = new Hobby();
        $hobby9->setName('Gaming');
        $hobby9->setImg('');
        $manager->persist($hobby9);

        $hobby10 = new Hobby();
        $hobby10->setName('Hacking');
        $hobby10->setImg('');
        $manager->persist($hobby10);

        $hobby11 = new Hobby();
        $hobby11->setName('Homing pigeons');
        $hobby11->setImg('');
        $manager->persist($hobby11);

        $hobby12= new Hobby();
        $hobby12->setName('Music');
        $hobby12->setImg('');
        $manager->persist($hobby12);

        $hobby13= new Hobby();
        $hobby13->setName('Singing');
        $hobby13->setImg('');
        $manager->persist($hobby13);

        $hobby14= new Hobby();
        $hobby14->setName('Soap making');
        $hobby14->setImg('');
        $manager->persist($hobby14);

        $hobby15= new Hobby();
        $hobby15->setName('Telling jokes');
        $hobby15->setImg('');
        $manager->persist($hobby15);

        $hobby16= new Hobby();
        $hobby16->setName('Yoga');
        $hobby16->setImg('');
        $manager->persist($hobby16);


        $manager->flush();

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@admin.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin,'admin'));
        $admin->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/tyler-nix-PQeoQdkU9jQ-300x300.jpg');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setBirthdate('30 February');
        $admin->addHobby($hobby1);
        $admin->addHobby($hobby7);



        $manager->persist($admin);

        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@user.com');
        $user->setPassword($this->passwordHasher->hashPassword($user,'user'));
        $user->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/robert-godwin-cdksyTqEXzo-300x300.jpg');
        $user->setRoles(['ROLE_USER']);
        $user->setBirthdate('1 January');
        $user->addHobby($hobby16);


        $manager->persist($user);


        $user2 = new User();
        $user2->setUsername('garry');
        $user2->setEmail('garry@user.com');
        $user2->setPassword($this->passwordHasher->hashPassword($user,'garry'));
        $user2->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/philipe-cavalcante-xe68QiMaDrQ-2-300x300.jpg');
        $user2->setRoles(['ROLE_USER']);
        $user2->setBirthdate('15 March');
        $user2->addHobby($hobby3);

        $manager->persist($user2);

        $user3 = new User();
        $user3->setUsername('redshock');
        $user3->setEmail('redshock@user.com');
        $user3->setPassword($this->passwordHasher->hashPassword($user,'redshock'));
        $user3->setAvatar('https://userstock.io/data/wp-content/uploads/2020/05/warren-wong-VVEwJJRRHgk-300x300.jpg');
        $user3->setRoles(['ROLE_USER']);
        $user3->setBirthdate('12 November');
        $user3->addHobby($hobby6);
        $user3->addHobby($hobby14);

        $manager->persist($user3);


        $user4 = new User();
        $user4->setUsername('maradonner');
        $user4->setEmail('maradonner@user.com');
        $user4->setPassword($this->passwordHasher->hashPassword($user,'maradonner'));
        $user4->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/nick-karvounis-75432-300x300.jpg');
        $user4->setRoles(['ROLE_USER']);
        $user4->setBirthdate('7 July');
        $user4->addHobby($hobby5);

        $manager->persist($user4);

        $user55 = new User();
        $user55->setUsername('ouster');
        $user55->setEmail('ouster@user.com');
        $user55->setPassword($this->passwordHasher->hashPassword($user,'ouster'));
        $user55->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/ilaya-raja-280339-300x300.jpg');
        $user55->setRoles(['ROLE_USER']);
        $user55->setBirthdate('2 September');
        $user55->addHobby($hobby2);


        $manager->persist($user55);

        $user5 = new User();
        $user5->setUsername('impplant');
        $user5->setEmail('impplant@user.com');
        $user5->setPassword($this->passwordHasher->hashPassword($user,'impplant'));
        $user5->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/lesly-b-juarez-276953-300x300.jpg');
        $user5->setRoles(['ROLE_USER']);
        $user5->setBirthdate('19 March');
        $user5->addHobby($hobby7);
        $user5->addHobby($hobby9);
        $user5->addHobby($hobby11);

        $manager->persist($user5);

        $user6 = new User();
        $user6->setUsername('marcantony');
        $user6->setEmail('marcantony@user.com');
        $user6->setPassword($this->passwordHasher->hashPassword($user,'marcantony'));
        $user6->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/tamarcus-brown-266128-300x300.jpg');
        $user6->setRoles(['ROLE_USER']);
        $user6->setBirthdate('16 December');
        $user6->addHobby($hobby8);


        $manager->persist($user6);

        $user7 = new User();
        $user7->setUsername('treecher');
        $user7->setEmail('treecher@user.com');
        $user7->setPassword($this->passwordHasher->hashPassword($user,'treecher'));
        $user7->setAvatar('https://userstock.io/data/wp-content/uploads/2020/05/eye-for-ebony-OeXcIHFwtsM-unsplash-300x300.jpg');
        $user7->setRoles(['ROLE_USER']);
        $user7->setBirthdate('1 April');
        $user7->addHobby($hobby16);
        $manager->persist($user7);

        $user8 = new User();
        $user8->setUsername('endocryne');
        $user8->setEmail('endocryne@user.com');
        $user8->setPassword($this->passwordHasher->hashPassword($user,'endocryne'));
        $user8->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/zi-jian-lim-218410-300x300.jpg');
        $user8->setRoles(['ROLE_USER']);
        $user8->setBirthdate('30 May');
        $user8->addHobby($hobby12);
        $manager->persist($user8);

        $user9 = new User();
        $user9->setUsername('prysm');
        $user9->setEmail('prysm@user.com');
        $user9->setPassword($this->passwordHasher->hashPassword($user,'prysm'));
        $user9->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/pexels-photo-26939-1-300x300.jpg');
        $user9->setRoles(['ROLE_USER']);
        $user9->setBirthdate('20 June');
        $user9->addHobby($hobby14);
        $manager->persist($user9);

        $user10 = new User();
        $user10->setUsername('bibliokiller');
        $user10->setEmail('bibliokiller@user.com');
        $user10->setPassword($this->passwordHasher->hashPassword($user,'bibliokiller'));
        $user10->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/yegide-matthews-60888-300x300.jpg');
        $user10->setRoles(['ROLE_USER']);
        $user10->setBirthdate('12 August');
        $user10->addHobby($hobby1);
        $manager->persist($user10);

        $user11 = new User();
        $user11->setUsername('vuvuka');
        $user11->setEmail('vuvuka@user.com');
        $user11->setPassword($this->passwordHasher->hashPassword($user,'vuvuka'));
        $user11->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/pexels-photo-300122-300x300.jpeg');
        $user11->setRoles(['ROLE_USER']);
        $user11->setBirthdate('13 August');
        $user11->addHobby($hobby3);
        $manager->persist($user11);


        $manager->flush();
    }

}