<?php

interface ObjetGeom {
    public function aCotesEgaux();
}

class Rectangle implements ObjetGeom{
    
    private $longueur = null;
    private $largeur = null;
    
    function __construct($longueur,$largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    
    function aCotesEgaux() {
        
        if ($this->longueur == $this->largeur) {
            return true;
        } else {
            return false;
        }
        
        //return ($this->longueur == $this->largeur)
    }
    
}

//test
$unRectangle = new Rectangle(3, 3);
echo "3-3 : " . $unRectangle->aCotesEgaux();
$unRectangle = new Rectangle(3, 4);
echo "<br />3-4 : " . $unRectangle->aCotesEgaux();
