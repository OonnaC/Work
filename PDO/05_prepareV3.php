 <?php
	include 'connect.php';
	
	$sql="SELECT * FROM user WHERE login = 'oonna'";
	// on pr�pare notre requ�te
	$prep=$connexion->prepare($sql); 
	
	
	
	
	//  on associe les valeurs aux place holders
	$prep->bindValue(1, 'valeur1', PDO::PARAM_STR);
	// on execute la requ�te
	$prep->execute();
	foreach($prep as $row) {
		// on affiche les membres
		echo "Information : ".$row['login']." <br />";
	}	
	

	echo "<br />***2020***<br />";
	
	
	// execution de la m�me requ�te avec un param�tre diff�rent
	$prep->bindValue(1, 'valeur2', PDO::PARAM_STR);
	// on execute la requ�te
	$prep->execute();
	foreach($prep as $row) {
		// on affiche les membres
		echo "Information : ".$row['login']." <br />";
	}
	
	
	// Fermeture de la connexion
	$connexion = NULL;
?>