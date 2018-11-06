<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $tag = (new Tag())
                ->setName($faker->name)
                ->setDescription($faker->text(100));
            $manager->persist($tag);
        }

        $manager->flush();
    }
}
