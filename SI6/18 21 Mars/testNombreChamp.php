<?php 
	include "connectAD.php";
	
	$sql = "SELECT numero from test;";
		
	$resultat = nombreChamp($sql);
		
	echo "<br />resultat = $resultat";
	
	deconnexion();
?>