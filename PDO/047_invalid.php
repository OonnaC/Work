 <?php
	include 'connect.php';
	
	// utilisation de la taille du tableau
	$sql = "SELECT * FROM useur";
	$sth = $connexion->query($sql); 
	
	if($sth === FALSE){
		echo 'Il y a une erreur dans la requête sql : ';
		echo $sql ;
		exit() ;
	}
	
	$resultats = $sth->fetchAll();
	$nombre =count($resultats);
	
	echo "Nombre d'enregistrements : $nombre.<br />";
	
	// Fermeture de la connexion
	$connexion = NULL;
?>