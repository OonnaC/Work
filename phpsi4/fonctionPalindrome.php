<?php
	
	function palin (&$premLettre,&$dernLettre)
	{
		for($i=0;$i<$nbBoucle;$i++) {
		$premLettre=substr($mot,$i,1);
		$dernLettre=substr($mot,$longueur-$i-1,1);
		echo "  Prem : ".$premLettre."   Dern : ".$dernLettre."<br />";
		if ($premLettre!=$dernLettre) {
			$palin=FALSE;
			break;
		}
	}
	}
	$mot=$_GET['mot'];
	//$mot="LAVAL";
	//mot doit etre insensible a la case
	$mot=strtolower($mot);
	$longueur=strlen($mot);
	$nbBoucle=(int)($longueur / 2);
	$palin=TRUE;
	

	
	if ($palin)
		echo "PALINDROME";
		else
			echo "PAS UN PALINDROME"

?>