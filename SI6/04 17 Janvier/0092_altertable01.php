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
		or die("Impossible de se connecter : " . mysql_error());
	echo "Connexion reussie au serveur $host:$port<br />";
		
	@$connexion = mysql_select_db($dbname)
		or die("Impossible d'ouvrir la base : ".mysql_error());
	echo "Base $dbname selectionnee... <br />";
	echo "Connecteur MySql<br />";
	
	$sql ="ALTER TABLE test ADD PRIMARY KEY (numero) ;";	
	echo "Execution de la requete : $sql<br />";
	
	$result = mysql_query($sql)
		or die ("Requete invalide : ".mysql_error());
	echo 'Table modifiee : cle primaire ajoutee';

    mysql_close($link);
?>