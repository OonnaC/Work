<?php
	//include "AccesDonnees.php";
    
	$host = "localhost";
    $user = "zchapaloo";
    $password = "rr88uclu";
    $dbname = "zfl2-zchapaloo";
    $port='3306';
	
	//$connexion=connexion($host, $port, $dbname, $user, $password);

	//$mysqli= new mysqli('localhost','zchapaloo', 'rr88uclu', 'zfl2-zchapaloo');
	$mysqli= new mysqli($host, $user, $password, $dbname);

	if ($mysqli->connect_errno)
	{
	    // Affichage d'un message d'erreur
	    echo "Error: Probl�me de connexion � la BDD \n";
	    echo "Errno: " . $mysqli->connect_errno . "\n";
	    echo "Error: " . $mysqli->connect_error . "\n";
	    // Arr�t du chargement de la page
	    exit();
	}
	// Instructions PHP � ajouter pour l'encodage utf8 du jeu de caract�res
	if (!$mysqli->set_charset("utf8")) {
	    printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
	    exit();
	}
	//echo ("Connexion BDD r&eacute;ussie !<br />");
	//echo ("Mode acc&egrave;s : $modeacces<br />");
?>