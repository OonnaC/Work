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
	
	@$link = mysql_connect($host,$user,$password)
		or die("Impossible de se connecter : ".mysql_error());
	echo "Connexion reussie au serveur $host:$port<br />";
	
	@$connexion = mysql_select_db($dbname)
		or die("Impossible d'ouvrir la base : ".mysql_error());
	echo "Base $dbname selectionnee... <br />";
	echo "Connecteur MySql<br />";
	
	mysql_close($link)
	
	//essayer cr�er table test mysql
	/*	$result = mysql_query(CREATE TABLE IF NOT EXISTS `test` (
	`numero` int(11) NOT NULL,
	`info` char(20) NOT NULL
	) ENGINE=MyISAM DEFAULT CHARSET=utf8);
	if (!$result) {
		die('Requ�te invalide : ' . mysql_error());*/
?>		