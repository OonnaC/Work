<?php

class LeCompte
{
    //Mise en place des attributs, du constructeur & méthodes
    
    const TYPE_COMPTE = "Compte standard";
    private $numeroCompte;
    private $soldeActuel;
    
    //attribut sastique
    static $compteur = 0;
    
    //les getteurs (accesseurs)
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }
    public function getSoldeActuel()
    {
        return $this->soldeActuel;
    }
    
    //les setteurs (mutateurs)
    public function setNumeroCompte($uneValeur)
    {
        $this->numeroCompte = $uneValeur;
    }
    public function setSoldeActuel($uneValeur)
    {
        $this->soldeActuel = $uneValeur;
    }
    
    //Méthodes d'accès
    public function __construct($unSolde,$unNumero)
    {
        //version propre
        $this->setSoldeActuel ($unSolde);
        $this->setNumeroCompte($unNumero);
        //fonctionne mais pas top
        //$this->$numeroCompte = $unNumero;
        //Mise en place d'un compteur
        self::$compteur++;
    }
    
}//Fin Classe LeCompte

//Test du constructeur de la classe LeCompte
$monCompte = new LeCompte(123,100);

//Test du getteur (accesseur) de la classe LeCompte
//Premier Compte
echo $monCompte->getSoldeActuel()." ".$monCompte::$compteur;
echo $monCompte->getNumeroCompte();
//Deuxième Compte
$monCompte2 = new LeCompte(456,100);
echo "<br />".$monCompte2->getSoldeActuel()." ".$monCompte2::$compteur;

?>