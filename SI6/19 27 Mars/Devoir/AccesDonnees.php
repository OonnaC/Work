<?php
$modeacces = "mysqli";


function connexion($host,$port,$dbname,$user,$password) {
	
	global $modeacces, $connexion;
	
	if ($modeacces=="mysql") {
		@$link = mysql_connect("$host", "$user", "$password")
		or die("Impossible de se connecter au serveur : " . mysql_error());			
		@$connexion = mysql_select_db("$dbname")
		or die("Impossible d'ouvrir la base : ".mysql_error());
		
		return $connexion;
	}

	if ($modeacces=="mysqli") {
		@$connexion = new mysqli("$host", "$user", "$password", "$dbname", $port);
	
		// QUESTION N°2
		// =-=--=-=-=-=
		
		//ouverture d'un fichier en ajout
		$handle=fopen("log.txt","a");
		
		if ($connexion->connect_error) {
			//die('Erreur de connexion (' . $connexion->connect_errno . ') '. $connexion->connect_error);
			fwrite($handle,"CNX PB - ".date("j M Y - G:i:s - ").$user." - ". $connexion->connect_error."\r\n");
			exit;
		} else {
			fwrite($handle,"CNX OK - ".date("j M Y - G:i:s - ").$user."\r\n");
		}
		//fermeture d'un fichier
		fclose($handle);
		
		// Fin QUESTION N°2
		// =-=--=-=-=-=-=-=
		
		return $connexion;
	}

}


function deconnexion() {
	
	global $modeacces, $connexion;

	if ($modeacces=="mysql") {
		mysql_close();
	}

	if ($modeacces=="mysqli") {
		$connexion->close();
	}

}


function executeSQL($sql) {

	global $modeacces, $connexion, $user;
	
	
	// QUESTION N°3
	// =-=--=-=-=-=
	
	//on recupere le premier mot de 6 carateres de la requete SQL en minuscules
	$mot=strtolower(substr($sql,0, 6));

	if ($mot=="insert" || $mot=="update") {
		
		//ouverture d'un fichier en ajout
		$handle=fopen("requete.txt","a");
		
		fwrite($handle,date("j M Y - G:i:s - ").$user." - ".$sql."\r\n");
		
		//fermeture d'un fichier
		fclose($handle);
		
	}
	
	// Fin QUESTION N°3
	// =-=--=-=-=-=-=-=
	
	if ($modeacces=="mysql") {
		$result = mysql_query($sql)		
		or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />
			 Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".
				mysql_error().
				"<br /><br />
				<b>REQUETE SQL : </b>$sql<br />");		
		return $result;
	}

	if ($modeacces=="mysqli") {
		$result = $connexion->query($sql)		
		or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />
			 Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".
				mysqli_error_list($connexion)[0]['error'].      //$mysqli->error_list;
				"<br /><br />
				<b>REQUETE SQL : </b>$sql<br />");				
		return $result;
	}
}



function compteSQL($sql) {

	global $modeacces, $connexion;

	if ($modeacces=="mysql") {
		$result = mysql_query($sql);
		$num_rows = mysql_num_rows($result);
		return $num_rows;
	}

	if ($modeacces=="mysqli") {
		$result = $connexion->query($sql);
		$num_rows = $connexion->affected_rows;
		return $num_rows;
	}

}



function tableSQL($sql) {

	global $modeacces, $connexion;

	if ($modeacces=="mysql") {
		$result = mysql_query($sql);
		$rows=array();
		while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
			array_push($rows,$row);
		}
		return $rows;
	}

	if ($modeacces=="mysqli") {
		$result = $connexion->query($sql);
		$rows=array();
		while ($row = $result->fetch_array(MYSQLI_BOTH)) {
			array_push($rows,$row);
		}
		return $rows;
	}

}



function champSQL($sql) {

	global $modeacces, $connexion;

	if ($modeacces=="mysql") {
		$result = mysql_query($sql);
		$rows = mysql_fetch_array($result, MYSQL_NUM);
		return $rows[0];
	}


	if ($modeacces=="mysqli") {
		$result = $connexion->query($sql);
		$rows = $result->fetch_array(MYSQLI_NUM);
		return $rows[0];
	}

}



?>
