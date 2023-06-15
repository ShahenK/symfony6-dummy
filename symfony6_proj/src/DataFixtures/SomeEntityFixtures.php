<?php

namespace App\DataFixtures;

use App\Entity\SomeEntity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SomeEntityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $someEntity = new SomeEntity();
        $someEntity->setTitle("Title1");
        $someEntity->setAmountOfEntity(10);
        $someEntity->setInsertDate(new \DateTimeImmutable());
        $someEntity->addOtherEntity($this->getReference('otherEntity_1'));
        $someEntity->addOtherEntity($this->getReference('otherEntity_2'));
        $manager->persist($someEntity);

        $someEntity1 = new SomeEntity();
        $someEntity1->setTitle("Title2");
        $someEntity1->setAmountOfEntity(5);
        $someEntity1->setInsertDate(new \DateTimeImmutable());
        $someEntity1->addOtherEntity($this->getReference('otherEntity_1'));
        $someEntity1->addOtherEntity($this->getReference('otherEntity_3'));
        $someEntity1->addOtherEntity($this->getReference('otherEntity_4'));
        $manager->persist($someEntity1);

        $manager->flush();
    }
}
