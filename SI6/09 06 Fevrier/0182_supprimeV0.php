<?php
	include 'connectAD.php';
	
	echo "Suppression de donnee V0<br />";
	
	//on recupere les varirable issue du formulaire
	$numero=$_GET['numero'];
		
	$sql = "DELETE FROM test WHERE numero=".$numero;
	$result = executeSQL_GE($sql);
	
	if ($result) {
		echo "Requete : ".$sql." a ete effectuee...";
		
	} else 
		echo ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");	
	
?>