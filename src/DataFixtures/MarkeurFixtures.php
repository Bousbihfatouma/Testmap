<?php

namespace App\DataFixtures;
use App\Entity\Markeur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class MarkeurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
          $markeur = new Markeur();
          $markeur->setmarkeTitle('Association femme');
          $markeur->setmarkerImage('image rose');
          $markeur->setLongitude('48.846650887489005');
          $markeur->setLatitude('2.3835955150750956');
          $manager->persist($markeur);

         $manager->flush();
          $markeur = new Markeur();
          $markeur->setmarkeTitle('Association de la terre');
          $markeur->setmarkerImage('image vert');
          $markeur->setLongitude('48.88501842113204');  
          $markeur->setLatitude('2.389876656581755');
          $manager->persist($markeur);

           $manager->flush();
          $markeur = new Markeur();
          $markeur->setmarkeTitle('Association  jaunes');
          $markeur->setmarkerImage('image violet');
          $markeur->setLongitude('48.841700884831525');   
          $markeur->setLatitude('2.31022436820652');
          $manager->persist($markeur);


    }

}






      

        