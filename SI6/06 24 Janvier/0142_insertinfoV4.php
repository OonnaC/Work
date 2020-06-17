<?php
	//on recupere les variables issue du formulaire
	$information=$_GET['information'];
	//supprime les blancs devant et derriere la chaine
	$information=trim($information);
	
	if (!empty($information)) {
		include 'connect.php';

		$sql = "INSERT INTO test (numero, info) VALUES (NULL, '".$information."');";
		$result = mysql_query($sql);
		if ($result)
			echo "<meta http-equiv='refresh' content='0;url=0141_frmsaisirV4.php?message=<font color=green> Ajout realise... </font>'>";
		else
			echo "<meta http-equiv='refresh' content='0;url=0141_frmsaisirV4.php?message=<font color=red> Probleme d`insertion... </font>'>";

	} else
		echo "<meta http-equiv='refresh' content='0;url=0141_frmsaisirV4.php?message=<font color=red> Renseigner l`information... </font>'>";

?>