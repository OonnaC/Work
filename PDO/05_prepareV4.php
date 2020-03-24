<?php
	include 'connect.php';
	
	$sql="SELECT * FROM user WHERE login = :uneValeur";
	// on pr�pare notre requ�te
	$prep=$connexion->prepare($sql); 
	//  on associe les valeurs aux place holders
	$prep->bindValue(':uneValeur', 'LeGuen', PDO::PARAM_STR); //'test'
	// on execute la requ�te
	$prep->execute();
	//compte le nombre de resultats
	$count=  $prep->rowCount(); 
	
	if ($count>0) {
		foreach($prep as $row) {
			// on affiche les membres
			echo "Information : ".$row['login']." <br />";
		}	
	} else {
		echo "Aucun r&eacute;sultat...";
	}	
	
	// Fermeture de la connexion
	$connexion = NULL;
?>