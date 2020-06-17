<?php
	include 'connect.php';
	
	$sql = "SELECT * FROM test"; 
	$result = mysql_query($sql);	
	
	if ($result) {
		echo "il y a ".mysql_num_rows($result)." enregistrements<br />";			
	} else 
		echo "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />";	

?>