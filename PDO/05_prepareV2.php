<?php
	include 'connect.php';
	
	$sql="SELECT * FROM user";
	// on prépare notre requête
	$requete_prepare=$connexion->prepare($sql); 
	// on execute la requête
	$requete_prepare->execute();
	
	foreach($requete_prepare as $row) {
		// on affiche les membres
		echo "Information : ".$row['login']." <br />";
	}	
	
	// Fermeture de la connexion
	$connexion = NULL;
?>