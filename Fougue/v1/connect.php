<?php
    
    //Renseignements pour la connexion à la base
	$host = "localhost";
    $user = "zchapaloo";
    $password = "rr88uclu";
    $dbname = "zfl2-zchapaloo";
    $port='3306';

	//Connexion à la base
	$mysqli= new mysqli($host, $user, $password, $dbname);
	//$mysqli= new mysqli('localhost','zchapaloo', 'rr88uclu', 'zfl2-zchapaloo');

	if ($mysqli->connect_errno)
	{
	    // Affichage d'un message d'erreur en cas de problème de connexion
	    echo "Error: Problème de connexion à la BDD \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
	    // Arrêt du chargement de la page
	    exit();
	}
	// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
	if (!$mysqli->set_charset("utf8")) {
	    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
	    exit();
	}
	//echo ("Connexion BDD r&eacute;ussie !<br />");
	//echo ("Mode acc&egrave;s : $modeacces<br />");
?>