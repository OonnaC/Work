 <?php
	include 'connect.php';
	
	$test = "Te'st";
	$test = $connexion->quote($test);
	
	// Insertion d�un enregistrement
	$sql = "INSERT INTO user (login) VALUES ($test)";
	$nombre_changement= $connexion->exec($sql);
	echo "La requ�te � ins�rer : $nombre_changement lignes.";
	
	// Fermeture de la connexion
	$connexion = NULL;

?>