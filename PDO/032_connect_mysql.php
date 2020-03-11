<?php
	$hote='localhost';    // le chemin vers le serveur
	$port='3307';
	$nom_bd='crudajax';        // le nom de votre base de données
	$utilisateur='root';  // nom d'utilisateur pour se connecter
	$mot_passe='';        // mot de passe de l'utilisateur 
	
	// ceation du Data Source Name, ou DSN, qui contient les infos
	// requises pour se connecter à la base.
	$dsn='mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd;
	
	try
	{
		$connexion = new PDO($dsn, $utilisateur, $mot_passe);
	}
	
	catch(Exception $e)
	{
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
		die();
	}	

	echo "Connexion ouverte<br />";	
	
	if ($connexion) {
		$connexion = NULL ; // Fermeture de la connexion
		echo "Connexion fermee";
	}
?>