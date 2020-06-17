<?php

	include 'connect.php';

	$sql = "ALTER TABLE `test` CHANGE `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT";
	
	//execution de la requete
	$result = executeSQL($sql);
	
	if ($result)
		echo 'Table modifiee : auto_increment ajoutee';
	else
		echo "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />";
			
	deconnexion();			
	
?>