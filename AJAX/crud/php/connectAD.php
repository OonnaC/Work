<?php
	include "AccesDonnees.php";

	$ip=explode(".",$_SERVER['SERVER_ADDR']);

	//  pour 000WEBHOST
	//	$ip=explode(".",$_SERVER['REMOTE_ADDR']);
	
	switch ($ip[0]) {

		case 127 :
		case 192 :
		//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "crudajax";
			$port='3307';
			break;
			
		case 130 :
		    //000WEBHOST
		    $host = "localhost";
		    $user = "id7206880_erwan";
		    $password = "**********";
		    $dbname = "id7206880_crudajax";
		    $port='3306';
		    break;
			
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}

	
	
	$connexion=connexion($host,$port,$dbname,$user,$password);
	
	if ($connexion) {
	echo "Connexion reussie<br />";
		echo "Host : $host:$port<br />";
		echo "Base $dbname selectionnee... <br />";
		echo "Utilisateur : $user<br />";
		echo "Mode acces : $modeacces<br />";
		echo "Type base : $typebase<hr />";
	}
	
?>

