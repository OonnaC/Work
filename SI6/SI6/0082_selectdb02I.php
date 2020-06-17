<?php

	$ip=explode(".",$_SERVER['SERVER_ADDR']);
	
	switch ($ip[0]) {
		
		case 127 :
			//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "SI6";
			$port="3306";
			break;
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}
	
	//mode objet
	$connexion = new mysqli("$host", "$user", "$password", "$dbname", $port);
	
	//mode procedural
	//$connexion = mysqli_connect("$host", "$user", "$password", "$dbname", $port);
	
	if ($connexion->connect_error) {
		die('Erreur de connexion (' . $connexion->connect_errno . ') '. $connexion->connect_error);
	} else {
		echo "Connexion reussie au serveur $host:$port<br />";
		echo "Base $dbname selectionnee... <br />";
		echo "Connecteur MySql_I";
		
		//essayer créer table test mysql_i
		/*$result = mysql_query(CREATE TABLE IF NOT EXISTS `test` (
				`numero` int(11) NOT NULL,
				`info` char(20) NOT NULL
				);
		if (!$result) {
			die('Requête invalide : ' . mysql_error());*/
	}
	
	//mode objet
	$connexion->close();
	
	//mode procedural
	//mysqli_close($connexion);

?>