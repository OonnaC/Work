<?php 
	include "connectAD.php";
	
	$sql = "SELECT * from test;";
		
	$resultat = nomChamp($sql,0);	
	//doit afficher numero
	echo "<br />resultat = $resultat";

	//doit afficher info
	$resultat = nomChamp($sql,1);
	echo "<br />resultat = $resultat";
	
	deconnexion();
?>