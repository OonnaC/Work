 <?php
	include 'connect.php';
	
	$sql="SELECT * FROM user WHERE login = 'oonna'";
	// on prépare notre requête
	$prep=$connexion->prepare($sql); 
	
	
	
	
	//  on associe les valeurs aux place holders
	$prep->bindValue(1, 'valeur1', PDO::PARAM_STR);
	// on execute la requête
	$prep->execute();
	foreach($prep as $row) {
		// on affiche les membres
		echo "Information : ".$row['login']." <br />";
	}	
	

	echo "<br />***2020***<br />";
	
	
	// execution de la même requête avec un paramètre différent
	$prep->bindValue(1, 'valeur2', PDO::PARAM_STR);
	// on execute la requête
	$prep->execute();
	foreach($prep as $row) {
		// on affiche les membres
		echo "Information : ".$row['login']." <br />";
	}
	
	
	// Fermeture de la connexion
	$connexion = NULL;
?>