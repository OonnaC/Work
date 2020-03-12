<?php
	include 'connect.php';
	
	$sql="SELECT * FROM user WHERE login = :uneValeur";
	// on prépare notre requête
	$prep=$connexion->prepare($sql); 
	//  on associe les valeurs aux place holders
	$prep->bindValue(':uneValeur', 'test2', PDO::PARAM_STR);
	// on execute la requête
	$prep->execute();
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