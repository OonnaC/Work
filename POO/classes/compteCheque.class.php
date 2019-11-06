<?php

class compteCheque extends compte
{
    CONST TYPE_COMPTE = "Compte Cheque";
    
    private $decouvertAutorise;
    
    public function decouvertAutorise()
    {
        return  $this->DecouvertAutorise;
    }
    public function setDecouvertAutorise($valeur)
    {
        $this->DecouvertAutorise = $valeur;
    }
    
    
    public function __construct($unNumeroCompte,$unSoldeActuel,$unDecouvertAutorise)
    {
        parent::__construct($unNumeroCompte, $unSoldeActuel);
        $this->setDecouvertAutorise($unDecouvertAutorise);
    }
    
    
    public function afficheCompte()
    {
        parent::afficheCompte();
        echo "<br /> Decouvert autorise :".$this->decouvertAutorise();
    }
    
}

?>