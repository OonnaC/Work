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
	
	
	if ($connexion->connect_error) {
    	die('Erreur de connexion (' . $connexion->connect_errno . ') '. $connexion->connect_error);
	} else {
		echo "Connexion reussie au serveur $host:$port<br />";
		echo "Base $dbname selectionnee... <br />";
		echo "Connecteur MySql_I<br />";
	}
	
	//$sql ="CREATE TABLE IF NOT EXISTS test (
	$sql ="CREATE TABLE test (
  				numero int(11) NOT NULL,
  				info char(20) NOT NULL
			) ENGINE=MyIsam DEFAULT CHARSET=utf8 ";
	$result = $connexion->query($sql)
		or die ("Requete invalide : ".  mysqli_error_list($connexion)[0]['error']);	
	echo "Table modifiee : cle primaire ajoutee";
		
	//mode objet
	$connexion->close();
    
?>