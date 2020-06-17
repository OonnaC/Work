<?php
	
	$ip=explode(".",$_SERVER['SERVER_ADDR']);
	
	//echo $ip[0];
	
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
			$user = "u291192831_user";
			$password = "iroise29";
			$dbname = "u291192831_si6";
			$port="3306";
			break;

		default :
			exit ("Serveur non reconnu...");
			break;		
	}
	
	@$link = mysql_connect($host,$user,$password)
	or die("Impossible de se connecter : ".mysql_error());
	
	echo "Connexion ".$_SERVER['SERVER_NAME']." réussie...";
	
	@mysql_close($link);
?>