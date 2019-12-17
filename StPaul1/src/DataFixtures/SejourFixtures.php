<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SejourFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $sejour = new Sejour();
        $sejour->setId("1")
               ->setSejintitule("Classe de découverte")
               ->setSejmontantmbi("170.00")
               ->setSejdtedeb("2016-03-01")
               ->setSejduree("3");
               
        $manager->persist($sejour);

        $manager->flush();
        
        $sejour1 = new Sejour();
        $sejour1->setId("2")
        ->setSejintitule("Classe de mer")
        ->setSejmontantmbi("200.00")
        ->setSejdtedeb("2016-05-02")
        ->setSejduree("5");
        
        $manager->persist($sejour1);
        
        $manager->flush();
        
        $sejour2 = new Sejour();
        $sejour2->setId("3")
        ->setSejintitule("Ski à Tignes")
        ->setSejmontantmbi("500.00")
        ->setSejdtedeb("2016-02-20")
        ->setSejduree("5");
        
        $manager->persist($sejour2);
        
        $manager->flush();
    }
}
