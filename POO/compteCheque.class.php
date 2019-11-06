<?php

class compteCheque extends compte
{
    CONST TYPE_COMPTE = "Compte Cheque";
    
    private $decouvertAutorise;
    
    public function getDecouvertAutorise()
    {
        return  $this->DecouvertAutorise;
    }
    public function setDecouvertAutorise()
    {
        $this->DecouvertAutorise = $valeur;
    }
}

?>