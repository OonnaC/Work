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
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}
	
	@$link = mysql_connect($host,$user,$password)
	or die("Impossible de se connecter : ".mysql_error());
	echo "Connexion ".$_SERVER['SERVER_NAME']." r�ussie...<br />";
	
	@$connexion = mysql_select_db($dbname)
	or die("Impossible d'ouvrir la base : ".mysql_error());
	echo "Base $dbname selectionnee... <br />";
	
	@mysql_close($link);
?>