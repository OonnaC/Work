<?php
	include 'connectAD.php';

	//on recupere les varirable issue du formulaire
	$numero=$_GET['numero'];
	$information=$_GET['information'];

	$sql = "INSERT INTO test (numero, info) VALUES (".$numero.", '".$information."');";

	$result = executeSQL($sql);
	
	if ($result)
		echo "<meta http-equiv='refresh' content='0;url=0123_frmsaisirV1.php?
				message=<font color=green> Ajout realise </font>'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=0123_frmsaisirV1.php?
				message=<font color=red> Le numero existe deja... </font>'>";

?>