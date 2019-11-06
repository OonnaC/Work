<?php

class LeCompte
{
    //Mise en place des attributs, du constructeur & m�thodes
    
    const TYPE_COMPTE = "Compte standard";
    private $numeroCompte;
    private $soldeActuel;
    
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
    
    //M�thodes d'acc�s
    public function __construct($unSolde,$unNumero)
    {
        //version propre
        $this->setSoldeActuel ($unSolde);
        $this->setNumeroCompte($unNumero);
        //fonctionne mais pas top
        //$this->$numeroCompte = $unNumero;
    }
    
}//Fin Classe LeCompte

//Test du constructeur de la classe LeCompte
$monCompte = new LeCompte(123,100);

//Test du getteur (accesseur) de la classe LeCompte
echo $monCompte->getSoldeActuel();
echo $monCompte->getNumeroCompte();

?>