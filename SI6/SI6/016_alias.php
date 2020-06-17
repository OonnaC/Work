<?php
	include 'connectAD.php';
	
	$sql = "SELECT COUNT(*) AS compteur FROM test";
	$result = mysql_query($sql);	
	
	if ($result) {
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		echo $row['compteur'];
	}else 
		echo "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />";	

?>