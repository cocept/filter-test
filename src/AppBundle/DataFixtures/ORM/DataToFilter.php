<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;
use AppBundle\Entity\Category;

class DataToFilter implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	// create categories
    	$categoryCode = new Category();
    	$categoryCode->setName('Code');

    	$categoryUx = new Category();
    	$categoryUx->setName('UX');

    	$manager->persist($categoryCode);
    	$manager->persist($categoryUx);

    	// create posts
    	$postCode1 = new Post();
    	$postCode1->setName('How to create a symfony bundle');
    	$postCode1->setCategory($categoryCode);

    	$postCode2 = new Post();
    	$postCode2->setName('How to create a symfony app');
    	$postCode2->setCategory($categoryCode);

    	$postUx1 = new Post();
    	$postUx1->setName('Interaction design for beginners');
    	$postUx1->setCategory($categoryUx);

    	$postUx2 = new Post();
    	$postUx2->setName('Microtransactions for experts');
    	$postUx2->setCategory($categoryUx);

    	$manager->persist($postCode1);
    	$manager->persist($postCode2);
    	$manager->persist($postUx1);
    	$manager->persist($postUx2);

    	// flush
        $manager->flush();
    }
}

