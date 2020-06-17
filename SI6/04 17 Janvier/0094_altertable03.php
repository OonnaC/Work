<?php
	$modeacces = "mysql";
	
	
	function connexion($host,$port,$dbname,$user,$password) {
		
		global $modeacces, $connexion;
		
		if ($modeacces=="mysql") {
			@$link = mysql_connect("$host", "$user", "$password")
			or die("Erreur de connexion : " . mysql_error());
			@$connexion = mysql_select_db("$dbname")
			or die("Impossible d'ouvrir la base : ".mysql_error());
			return $connexion;
		}
		
		if ($modeacces=="mysqli") {
			@$connexion = new mysqli("$host", "$user", "$password", "$dbname", $port);
			if ($connexion->connect_error) {
				die('Erreur de connexion (' . $connexion->connect_errno . ') '. $connexion->connect_error);
			}
			return $connexion;
		}
		
	}
	
	function deconnexion() {
		
		global $modeacces, $connexion;
		
		if ($modeacces=="mysql") {
			@mysql_close();
		}
		
		if ($modeacces=="mysqli") {
			$connexion->close();
		}
		
	}
	
	function executeSQL($sql){
		
		global $modeacces, $connexion;
		
		if ($modeacces=="mysql") {
			@$result = mysql_query($sql)
			or die ("Requete invalide : ".mysql_error());
			return $result;
		}
		
		if ($modeacces=="mysqli") {
			$result = $connexion->query($sql)
			or die ("Requete invalide : ".  mysqli_error_list($connexion)[0]['error']);
			return $result;
		}
		
	}
	
	
	$ip=explode(".",$_SERVER['SERVER_ADDR']);
	
	switch ($ip[0]) {
		
		case 127 :
			//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "SI6";
			$port='3306';
			break;
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}
	
	$connexion=connexion($host,$port,$dbname,$user,$password);
	
	if ($connexion) {
		echo "Connexion reussie au serveur $host:$port<br />";
		echo "Base $dbname selectionnee... <br />";
		echo "Mode acces : $modeacces<br />";
		
		$sql =" ALTER TABLE test ADD PRIMARY KEY (numero) ;";
		echo "<br />Execution de la requete : $sql<br />";
		
		$result = executeSQL($sql);
		
		if ($result)
			echo "Table modifiee : cle primaire ajoutee";
		else
			echo "Requete invalide";
				
	}
	
	deconnexion();
	
?>