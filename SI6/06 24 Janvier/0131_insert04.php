<?php
	include 'connectAD.php';
	
	$sql = "INSERT INTO test (numero, info) VALUES (124964, 'Tutu');";
	
	//execution de la requete
	$result = executeSQL($sql);
	
	if ($result)
		echo "Requete : ".$sql." a ete effectuee...";
	else 
		echo ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".erreurSQL()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");
	
	echo "<br />Le programme PHP peut continuer...";
			
?>