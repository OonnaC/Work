 <?php
	include 'connect.php';
	
	$test = "Te'st";
	$test = $connexion->quote($test);
	
	// Insertion d’un enregistrement
	$sql = "INSERT INTO user (login) VALUES ($test)";
	$nombre_changement= $connexion->exec($sql);
	echo "La requête à insérer : $nombre_changement lignes.";
	
	// Fermeture de la connexion
	$connexion = NULL;

?>