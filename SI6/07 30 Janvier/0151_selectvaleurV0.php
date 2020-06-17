<?php
	//include le fichier de connexion
	include 'connect.php';
	
	//creation de la requete
	$sql = "SELECT COUNT(*) FROM test";
	
	//execution de la requete 
	$result = mysql_query($sql);

	//test si la requete fonctionne
	if ($result) {
		
		//recuperer le resultat 
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		
		//affiche le resultat
		echo "il y a ".$row['0']." enregistrements<br />";	
		
	} else 
		//probleme dans la requete
		echo "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />";	

?>