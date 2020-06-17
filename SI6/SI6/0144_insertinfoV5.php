<?php

/*
CREATE TABLE IF NOT EXISTS `test` (
		`numero` int(11) NOT NULL AUTO_INCREMENT,
		`info` char(20) NOT NULL,
		PRIMARY KEY (`numero`),
		UNIQUE KEY `info` (`info`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
*/


// $sql = "ALTER TABLE `test` ADD UNIQUE( `info`);";


	//on recupere les varirable issue du formulaire
	$information=$_GET['information'];
	
	//supprime les espaces avant et apres l'information
	$information=trim($information);
	
	
	if (!empty($information)) {
		include 'connectAD.php';

		$sql = "INSERT INTO test (numero, info) VALUES (NULL, '".$information."');";
		$result = executeSQL($sql);
		
		if ($result)
			echo "<meta http-equiv='refresh' content='0;url=0143_frmsaisirV5.php?message=<font color=green> Ajout realise </font>'>";
		else
			echo "<meta http-equiv='refresh' content='0;url=0143_frmsaisirV5.php?message=<font color=red>  ".mysql_error().".... </font>'>";

	} else
		echo "<meta http-equiv='refresh' content='0;url=0143_frmsaisirV5.php?message=<font color=red> Renseigner l&#039;information... </font>'>";

?>