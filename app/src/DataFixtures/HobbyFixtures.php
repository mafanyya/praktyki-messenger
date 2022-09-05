<?php
namespace App\DataFixtures;

use App\Entity\Hobby;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HobbyFixtures extends Fixture
{
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
    }
}