<?php
	include 'connectAD.php';
	
	echo "Insertion de donnee V0<br />";
		
	//on recupere les varirable issue du formulaire
	$numero=$_GET['numero'];
	$information=$_GET['information'];

	//creation de la requete d'insertion
	$sql = "INSERT INTO test (numero, info) VALUES (".$numero.", '".$information."');";
	//$sql = "INSERT INTO test (numero, info) VALUES ($numero, '$information');";
	
	echo "SQL : $sql <br />";
	
	//execution de la requete
	$result = executeSQL($sql);
	
	//test si OK
	if ($result)
		echo "Requete : ".$sql." a ete effectuee...";
	else 
		echo "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"].
	         "</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".
	         __LINE__."<br />".erreurSQL()."<br /><br />
             <b>REQUETE SQL : </b>$sql<br />";
		
?>