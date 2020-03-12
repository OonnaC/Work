<?php
	include 'connect.php';
	
	$sql="SELECT * FROM user WHERE login LIKE ?";
	// on prépare notre requête
	$prep=$connexion->prepare($sql); 	
	// on execute la requête
	$prep->execute(array("%x%"));	
	//compte le nombre de resultats
	$count=  $prep->rowCount(); 
	
	if ($count>0) {
		foreach($prep as $row) {
			// on affiche les membres
			echo "Information : ".$row['login']." <br />";
		}	
	} else {
		echo "Aucun résultat...";
	}	
	
	// Fermeture de la connexion
	$connexion = NULL;
?>		