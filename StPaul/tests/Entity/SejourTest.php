<?php

    //tests/Entity/SejourTest.php
    namespace App\Tests\Entity;
    
    
    use App\Entity\Sejour;
    use PHPUnit\Framework\TestCase;
    
    class SejourTest extends TestCase
    {
        public function testSejDteFin()
        {
            $unsejour = new Sejour(1,'Classe de mer',200,'2016-05-02',5);
            //$sej;
            
            $resultatAttendu = '2016-05-07';
            $resultatObserve = $unsejour->getSejDteFin();
            
            $this->assertEquals($resultatAttendu,$resultatObserve);
            
        }
    }