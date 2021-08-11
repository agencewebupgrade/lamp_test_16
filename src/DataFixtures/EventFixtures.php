<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Event;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($count = 0; $count < 20; $count++) {
            $event = new Event();
            $event->setName("Evenement " . $count);
            $event->setDate(new \DateTime());
            $manager->persist($event);
        }
        $manager->flush();
    }
}
