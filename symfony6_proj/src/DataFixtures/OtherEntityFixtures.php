<?php

namespace App\DataFixtures;

use App\Entity\OtherEntity;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OtherEntityFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $otherEntity = new OtherEntity();
        $otherEntity->setName('Name1');
        $manager->persist($otherEntity);

        $otherEntity1 = new OtherEntity();
        $otherEntity1->setName('Name2');
        $manager->persist($otherEntity1);

        $otherEntity2 = new OtherEntity();
        $otherEntity2->setName('Name3');
        $manager->persist($otherEntity2);

        $otherEntity3 = new OtherEntity();
        $otherEntity3->setName('Name4');
        $manager->persist($otherEntity3);

        $manager->flush();

        $this->addReference('otherEntity_1', $otherEntity);
        $this->addReference('otherEntity_2', $otherEntity1);
        $this->addReference('otherEntity_3', $otherEntity2);
        $this->addReference('otherEntity_4', $otherEntity3);
    }
}
