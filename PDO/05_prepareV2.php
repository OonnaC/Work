<?php
	include 'connect.php';
	
	$sql="SELECT * FROM user";
	// on pr�pare notre requ�te
	$requete_prepare=$connexion->prepare($sql); 
	// on execute la requ�te
	$requete_prepare->execute();
	
	foreach($requete_prepare as $row) {
		// on affiche les membres
		echo "Information : ".$row['login']." <br />";
	}	
	
	// Fermeture de la connexion
	$connexion = NULL;
?>