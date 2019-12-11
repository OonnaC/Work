<?php

abstract class Humain {
    
    //const TYPE_VIVANT = "Être humain";
    private $sexe;
    private $nom;
    
    public function getSexe()
    {
        return $this->sexe;
    }
    public function getNom()
    {
        return $this->nom;
    }
    
    //les setteurs (mutateurs)
    public function setSexe($unSexe)
    {
        $this->sexe = $unSexe;
    }
    public function setNom($unNom)
    {
        $this->nom = $unNom;
    }
    
    /*public function __construct($unSexe,$unNom) {
        //echo "Classe : ".__CLASS__."<br />";
        $this->setSexe ($unSexe);
        $this->setNon($unNom);
    }*/
    
    abstract public function faireDuSport();
    
    //Methode commune
    public function toString() {
        //$chaine= "";
        if ($this->getSexe()=='M'){
            $chaine = "Monsieur ";
        }else{
            $chaine = "Madame ";
        
        $chaine .= $this->getNom();
        
        return $chaine;
        }
    }
    
    //Méthode finale: classes fille héritent mais aucune modif possible
    /*final public function boire() {
        
        if ($this->getSexe()=='M'){
            $chaine = "Ricard";
        }else{
            $chaine = "Whisky ";
            
            $chaine .= $this->getNom();
            
            return $chaine;
        }
    }*/
    
}

class Homme extends Humain {
    
    public function __construct($unNom)
    {
        
        $this-> setNom($unNom);
        $this->setSexe('M');
    }
    
    public function faireDuSport()
    {
        echo $this->toString(). " fait du foot <br />";
    }
    
}

class Femme extends Humain {
    
    public function __construct($unNom)
    {
        $this-> setNom($unNom);
        $this->setSexe('F');
    }
    
    public function faireDuSport()
    {
        echo $this->toString(). " fait du Karting <br />";
    }
    
}
//Test du constructeur de la classe LeCompte
$unePersonne = new Homme("Maurice",'M');

//Test du getteur (accesseur) de la classe 

echo $unePersonne->getNom();

echo $unePersonne->faireDuSport();

echo $unePersonne->toString();

/*abstract class Humain {
    
    private $sexe;
    private $nom;
    
    public function  setNom($unNom) {
        $this->nom = $unNom;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function  setSexe($unSexe) {
        $this->sexe = $unSexe;
    }
    
    public function getSexe() {
        return $this->sexe;
    }
    
    // Force la classe �tendue � d�finir cette m�thode
    abstract public function faireDuSport();
    
    // Methode commune
    public function toString() {
        if ($this->getSexe()=='M')
            $chaine = "Monsieur ";
            else
                $chaine = "Madame ";
                
                $chaine .= $this->getNom();
                
                return $chaine;
    }
    
}



class Homme extends Humain {
    
    public function __construct($unNom) {
        $this->setNom($unNom);
        $this->setSexe('M');
    }
    
    public function faireDuSport() {
        echo $this->toString()." fait de la boxe<br />";
    }
    
}



class Femme extends Humain {
    
    public function __construct($unNom) {
        $this->setNom($unNom);
        $this->setSexe('F');
    }
    
    public function faireDuSport() {
        echo $this->toString()." fait de la danse<br />";
    }
    
}*/



//PROGRAMME PRINCIPAL
$unHumain = new Homme('Toto');
$unHumain->faireDuSport();

$unHumain = new Femme('Titi');
$unHumain->faireDuSport();
?>