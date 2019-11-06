<?php 

class compte
{
	const TYPE_COMPTE = "Compte standard";
	
	static $compteur = 0;
	
	private $numeroCompte;
	private $soldeActuel;
	
	public function numeroCompte()
	{
		return  $this->numeroCompte;
	}	
	public function setNumeroCompte($valeur)
	{
		$this->numeroCompte = $valeur;
	}
	
	
	public function soldeActuel()
	{
		return $this->soldeActuel;
	}
	public function setSoldeActuel($valeur)
	{
		$this->soldeActuel = $valeur;
	}
	
	
	public function __construct($unNumeroCompte, $unSoldeActuel)
	{
		$this->setNumeroCompte($unNumeroCompte);
		$this->setSoldeActuel($unSoldeActuel);
		self::$compteur++;	
	}
	
	
	public function afficheCompte()
	{
		echo "<br />".self::TYPE_COMPTE." numero : ".self::$compteur;
		echo " - N° : ".$this->numeroCompte()." Solde : ".$this->soldeActuel()."&euro;<br />";
	}
	

	public function depot($uneSomme)
	{
		$this->soldeActuel += $uneSomme;
	}
	
	public function retrait($uneSomme)
	{
		$this->soldeActuel -= $uneSomme;
	}
	
}


?>