<?php
	echo "adresse IP serveur : ".$_SERVER['SERVER_ADDR'];
	
	$ip = explode (".", $_SERVER['SERVER_ADDR']);
	
	switch ($ip[0]) {
		
		case 127 :
			//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "SI6";
			$port="3306";
			break;
		
		case 31 :
			//hostinger
			$host = "mysql.hostinger.fr";
			$user = "************";
			$password = "*********";
			$dbname = "*********";
			$port="3306";
			break;
			
		case 172 :
			//olympe
			$host = "sql.olympe.in";
			$user = "************";
			$password = "*********";
			$dbname = "*********";
			$port="3306";
			break;
			
		case 212 :
			//free
			$host="localhost";
			$user = "************";
			$password = "*********";
			$dbname = "*********";
			$port="3306";
			break;
					
		default :
			exit ("Serveur non reconnu...");
			break;
			
	}
	
	@$link = mysql_connect($host, $user, $password)
		or die("Impossible de se connecter : " . mysql_error());
	
	echo "Connexion réussie au serveur $host<br />";
	
	@mysql_close($link);

?>