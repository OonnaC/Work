<?php
	echo "test : ".$_SERVER['SERVER_ADDR'];
	
	$ip = explode (".", $_SERVER['SERVER_ADDR']);
	
	echo $ip[0];
	
	
	switch ($ip[0]) {
		
		case 127 :
			//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "SI6";
			$port="3306";
			break;
			
			
	}		
	@$link = mysql_connect("localhost", "root", "")
		or die("Impossible de se connecter : " . mysql_error());

	echo 'Connexion réussie';

	@mysql_close($link);

?>