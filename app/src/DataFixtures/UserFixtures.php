<?php

namespace App\DataFixtures;

use App\DataFixtures\HobbyFixtures;
use App\Entity\Country;
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
        $hobby1->setImg('bi bi-palette');
        $manager->persist($hobby1);

        $hobby2 = new Hobby();
        $hobby2->setName('Baking');
        $hobby2->setImg('bi bi-egg-fried');
        $manager->persist($hobby2);

        $hobby3 = new Hobby();
        $hobby3->setName('Beer tasting');
        $hobby3->setImg('bi bi-cup-straw');
        $manager->persist($hobby3);

        $hobby4 = new Hobby();
        $hobby4->setName('Candy making');
        $hobby4->setImg('bi bi-balloon-heart');
        $manager->persist($hobby4);

        $hobby5 = new Hobby();
        $hobby5->setName('Chess');
        $hobby5->setImg('bi bi-gear');
        $manager->persist($hobby5);

        $hobby6 = new Hobby();
        $hobby6->setName('Programming');
        $hobby6->setImg('bi bi-cpu');
        $manager->persist($hobby6);

        $hobby7 = new Hobby();
        $hobby7->setName('Cross stitch');
        $hobby7->setImg('bi bi-x-diamond');
        $manager->persist($hobby7);

        $hobby8 = new Hobby();
        $hobby8->setName('Dance');
        $hobby8->setImg('bi bi-boombox');
        $manager->persist($hobby8);

        $hobby9 = new Hobby();
        $hobby9->setName('Gaming');
        $hobby9->setImg('bi bi-controller');
        $manager->persist($hobby9);

        $hobby10 = new Hobby();
        $hobby10->setName('Hacking');
        $hobby10->setImg('bi bi-motherboard');
        $manager->persist($hobby10);

        $hobby11 = new Hobby();
        $hobby11->setName('Homing pigeons');
        $hobby11->setImg('bi bi-egg');
        $manager->persist($hobby11);

        $hobby12= new Hobby();
        $hobby12->setName('Music');
        $hobby12->setImg('bi bi-file-music');
        $manager->persist($hobby12);

        $hobby13= new Hobby();
        $hobby13->setName('Singing');
        $hobby13->setImg('bi bi-music-note-list');
        $manager->persist($hobby13);

        $hobby14= new Hobby();
        $hobby14->setName('Soap making');
        $hobby14->setImg('bi bi-brightness-high');
        $manager->persist($hobby14);

        $hobby15= new Hobby();
        $hobby15->setName('Telling jokes');
        $hobby15->setImg('bi bi-chat-dots');
        $manager->persist($hobby15);

        $hobby16= new Hobby();
        $hobby16->setName('Yoga');
        $hobby16->setImg('bi bi-circle');
        $manager->persist($hobby16);


        $manager->flush();

        $country1 = new Country();
        $country1->setName('Afghanistan');
        $country1->setContinent('Asia');
        $manager->persist($country1);

        $country2 = new Country();
        $country2->setName('Malaysia');
        $country2->setContinent('Asia');
        $manager->persist($country2);

        $country3 = new Country();
        $country3->setName('North Korea');
        $country3->setContinent('Asia');

        $manager->persist($country3);

        $country4 = new Country();
        $country4->setName('China');
        $country4->setContinent('Asia');

        $manager->persist($country4);

        $country5 = new Country();
        $country5->setName('Congo');
        $country5->setContinent('Africa');

        $manager->persist($country5);

        $country6 = new Country();
        $country6->setName('Uganda');
        $country6->setContinent('Africa');

        $manager->persist($country6);

        $country7 = new Country();
        $country7->setName('Mozambique');
        $country7->setContinent('Africa');

        $manager->persist($country7);

        $country8 = new Country();
        $country8->setName('Germany');
        $country8->setContinent('Europe');

        $manager->persist($country8);

        $country9 = new Country();
        $country9->setName('Ireland');
        $country9->setContinent('Europe');

        $manager->persist($country9);

        $country10 = new Country();
        $country10->setName('Poland');
        $country10->setContinent('Europe');

        $manager->persist($country10);

        $country11 = new Country();
        $country11->setName('Russia');
        $country11->setContinent('Europe');

        $manager->persist($country11);

        $country12 = new Country();
        $country12->setName('USA');
        $country12->setContinent('North America');

        $manager->persist($country12);

        $country13 = new Country();
        $country13->setName('Canada');
        $country13->setContinent('North America');

        $manager->persist($country13);

        $country14 = new Country();
        $country14->setName('Mexico');
        $country14->setContinent('North America');

        $manager->persist($country14);

        $country15 = new Country();
        $country15->setName('Cuba');
        $country15->setContinent('North America');

        $manager->persist($country15);

        $country16 = new Country();
        $country16->setName('Brazil');
        $country16->setContinent('South America');

        $manager->persist($country16);

        $country17 = new Country();
        $country17->setName('Peru');
        $country17->setContinent('South America');

        $manager->persist($country17);

        $country18 = new Country();
        $country18->setName('Chile');
        $country18->setContinent('South America');

        $manager->persist($country18);

        $country19 = new Country();
        $country19->setName('Australia');
        $country19->setContinent('Australia/Oceania');

        $manager->persist($country19);

        $country20 = new Country();
        $country20->setName('Papua New Guinea');
        $country20->setContinent('Australia/Oceania');

        $manager->persist($country20);

        $manager->flush();





        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@admin.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin,'admin'));
        $admin->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/tyler-nix-PQeoQdkU9jQ-300x300.jpg');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setBirthdate('30 February');
        $admin->addHobby($hobby3);
        $admin->addHobby($hobby6);
        $admin->setCountry($country1);
        $admin->setIsShowCredentials(true);


        $manager->persist($admin);

        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@user.com');
        $user->setPassword($this->passwordHasher->hashPassword($user,'user'));
        $user->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/robert-godwin-cdksyTqEXzo-300x300.jpg');
        $user->setRoles(['ROLE_USER']);
        $user->setBirthdate('1 January');
        $user->addHobby($hobby16);
        $user->setCountry($country3);
        $user->setIsShowCredentials(true);


        $manager->persist($user);


        $user2 = new User();
        $user2->setUsername('garry');
        $user2->setEmail('garry@user.com');
        $user2->setPassword($this->passwordHasher->hashPassword($user,'garry'));
        $user2->setAvatar('https://userstock.io/data/wp-content/uploads/2020/06/philipe-cavalcante-xe68QiMaDrQ-2-300x300.jpg');
        $user2->setRoles(['ROLE_USER']);
        $user2->setBirthdate('15 March');
        $user2->addHobby($hobby3);
        $user2->setCountry($country4);
        $user2->setIsShowCredentials(false);

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
        $user3->setCountry($country6);
        $user3->setIsShowCredentials(true);

        $manager->persist($user3);


        $user4 = new User();
        $user4->setUsername('maradonner');
        $user4->setEmail('maradonner@user.com');
        $user4->setPassword($this->passwordHasher->hashPassword($user,'maradonner'));
        $user4->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/nick-karvounis-75432-300x300.jpg');
        $user4->setRoles(['ROLE_USER']);
        $user4->setBirthdate('7 July');
        $user4->addHobby($hobby5);
        $user4->setCountry($country4);
        $user4->setIsShowCredentials(true);

        $manager->persist($user4);

        $user55 = new User();
        $user55->setUsername('ouster');
        $user55->setEmail('ouster@user.com');
        $user55->setPassword($this->passwordHasher->hashPassword($user,'ouster'));
        $user55->setAvatar('https://userstock.io/data/wp-content/uploads/2017/09/ilaya-raja-280339-300x300.jpg');
        $user55->setRoles(['ROLE_USER']);
        $user55->setBirthdate('2 September');
        $user55->addHobby($hobby2);
        $user55->setCountry($country7);
        $user55->setIsShowCredentials(true);


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
        $user5->setCountry($country8);
        $user5->setIsShowCredentials(true);

        $manager->persist($user5);

        $user6 = new User();
        $user6->setUsername('marcantony');
        $user6->setEmail('marcantony@user.com');
        $user6->setPassword($this->passwordHasher->hashPassword($user,'marcantony'));
        $user6->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/tamarcus-brown-266128-300x300.jpg');
        $user6->setRoles(['ROLE_USER']);
        $user6->setBirthdate('16 December');
        $user6->addHobby($hobby8);
        $user6->setCountry($country11);
        $user6->setIsShowCredentials(true);


        $manager->persist($user6);

        $user7 = new User();
        $user7->setUsername('treecher');
        $user7->setEmail('treecher@user.com');
        $user7->setPassword($this->passwordHasher->hashPassword($user,'treecher'));
        $user7->setAvatar('https://userstock.io/data/wp-content/uploads/2020/05/eye-for-ebony-OeXcIHFwtsM-unsplash-300x300.jpg');
        $user7->setRoles(['ROLE_USER']);
        $user7->setBirthdate('1 April');
        $user7->addHobby($hobby16);
        $user7->setCountry($country12);
        $user7->setIsShowCredentials(true);
        $manager->persist($user7);


        $user8 = new User();
        $user8->setUsername('endocryne');
        $user8->setEmail('endocryne@user.com');
        $user8->setPassword($this->passwordHasher->hashPassword($user,'endocryne'));
        $user8->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/zi-jian-lim-218410-300x300.jpg');
        $user8->setRoles(['ROLE_USER']);
        $user8->setBirthdate('30 May');
        $user8->addHobby($hobby12);
        $user8->setCountry($country15);
        $user8->setIsShowCredentials(true);
        $manager->persist($user8);

        $user9 = new User();
        $user9->setUsername('prysm');
        $user9->setEmail('prysm@user.com');
        $user9->setPassword($this->passwordHasher->hashPassword($user,'prysm'));
        $user9->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/pexels-photo-26939-1-300x300.jpg');
        $user9->setRoles(['ROLE_USER']);
        $user9->setBirthdate('20 June');
        $user9->addHobby($hobby14);
        $user9->setCountry($country17);
        $user9->setIsShowCredentials(true);
        $manager->persist($user9);

        $user10 = new User();
        $user10->setUsername('bibliokiller');
        $user10->setEmail('bibliokiller@user.com');
        $user10->setPassword($this->passwordHasher->hashPassword($user,'bibliokiller'));
        $user10->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/yegide-matthews-60888-300x300.jpg');
        $user10->setRoles(['ROLE_USER']);
        $user10->setBirthdate('12 August');
        $user10->addHobby($hobby1);
        $user10->setCountry($country9);
        $user10->setIsShowCredentials(true);
        $manager->persist($user10);

        $user12 = new User();
        $user12->setUsername('mateusz');
        $user12->setEmail('mateusz@user.com');
        $user12->setPassword($this->passwordHasher->hashPassword($user,'mateusz'));
        $user12->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/cristian-newman-281239-300x300.jpg');
        $user12->setRoles(['ROLE_USER']);
        $user12->setBirthdate('23 September');
        $user12->addHobby($hobby4);
        $user12->setCountry($country19);
        $user12->setIsShowCredentials(true);
        $manager->persist($user12);

        $user13 = new User();
        $user13->setUsername('robotik');
        $user13->setEmail('robotik@user.com');
        $user13->setPassword($this->passwordHasher->hashPassword($user,'robotik'));
        $user13->setAvatar('https://userstock.io/data/wp-content/uploads/2017/06/child-children-girl-happy-300x300.jpg');
        $user13->setRoles(['ROLE_USER']);
        $user13->setBirthdate('30 May');
        $user13->addHobby($hobby12);
        $user13->setCountry($country14);
        $user13->setIsShowCredentials(true);
        $manager->persist($user8);

        $user14 = new User();
        $user14->setUsername('prince');
        $user14->setEmail('prince@user.com');
        $user14->setPassword($this->passwordHasher->hashPassword($user,'prince'));
        $user14->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/pexels-photo-247917-300x300.jpg');
        $user14->setRoles(['ROLE_USER']);
        $user14->setBirthdate('August 12');
        $user14->addHobby($hobby7);
        $user14->setCountry($country15);
        $user14->setIsShowCredentials(true);
        $manager->persist($user14);

        $user15 = new User();
        $user15->setUsername('ack');
        $user15->setEmail('ack@user.com');
        $user15->setPassword($this->passwordHasher->hashPassword($user,'ack'));
        $user15->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/lotte-meijer-142573-300x300.jpg');
        $user15->setRoles(['ROLE_USER']);
        $user15->setBirthdate('December 27');
        $user15->addHobby($hobby2);
        $user15->setCountry($country15);
        $user15->setIsShowCredentials(true);
        $manager->persist($user14);

        $user16 = new User();
        $user16->setUsername('playmoe');
        $user16->setEmail('playmoe@user.com');
        $user16->setPassword($this->passwordHasher->hashPassword($user,'playmoe'));
        $user16->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/pexels-photo-1-300x300.jpg');
        $user16->setRoles(['ROLE_USER']);
        $user16->setBirthdate('January 15');
        $user16->addHobby($hobby10);
        $user16->setCountry($country12);
        $user16->setIsShowCredentials(true);
        $manager->persist($user12);

        $user17 = new User();
        $user17->setUsername('planto');
        $user17->setEmail('planto@user.com');
        $user17->setPassword($this->passwordHasher->hashPassword($user,'planto'));
        $user17->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/andre-hunter-111247-300x300.jpg');
        $user17->setRoles(['ROLE_USER']);
        $user17->setBirthdate('October 3');
        $user17->addHobby($hobby16);
        $user17->setCountry($country19);
        $user17->setIsShowCredentials(true);
        $manager->persist($user10);

        $user18 = new User();
        $user18->setUsername('panic');
        $user18->setEmail('panic@user.com');
        $user18->setPassword($this->passwordHasher->hashPassword($user,'panic'));
        $user18->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/chelsea-ferenando-172284-300x300.jpg');
        $user18->setRoles(['ROLE_USER']);
        $user18->setBirthdate('March 25');
        $user18->addHobby($hobby13);
        $user18->addHobby($hobby15);
        $user18->setCountry($country11);
        $user18->setIsShowCredentials(true);
        $manager->persist($user18);

        $user19 = new User();
        $user19->setUsername('azudeon');
        $user19->setEmail('azudeon@user.com');
        $user19->setPassword($this->passwordHasher->hashPassword($user,'azudeon'));
        $user19->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/man-holiday-people-face-300x300.jpg');
        $user19->setRoles(['ROLE_USER']);
        $user19->setBirthdate('February 24');
        $user19->addHobby($hobby16);
        $user19->setCountry($country6);
        $user19->setIsShowCredentials(true);
        $manager->persist($user19);

        $user20 = new User();
        $user20->setUsername('fielerini');
        $user20->setEmail('fielerini@user.com');
        $user20->setPassword($this->passwordHasher->hashPassword($user,'fielerini'));
        $user20->setAvatar('https://userstock.io/data/wp-content/uploads/2017/07/filipe-almeida-191584-300x300.jpg');
        $user20->setRoles(['ROLE_USER']);
        $user20->setBirthdate('November 30');
        $user20->addHobby($hobby10);
        $user20->setCountry($country4);
        $user20->setIsShowCredentials(true);
        $manager->persist($user20);

        $manager->flush();
    }

}