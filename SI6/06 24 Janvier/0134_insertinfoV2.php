<?php
/*
CREATE TABLE IF NOT EXISTS `test` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `info` char(20) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
*/

	include 'connect.php';

	//on recupere les varirable issue du formulaire
	$information=$_GET['information'];

	$sql = "INSERT INTO test (numero, info) VALUES (NULL, '".$information."');";

	//execution de la requete
	$result = executeSQL($sql);

	if ($result)
		echo "<meta http-equiv='refresh' content='0;url=0133_frmsaisirV2.php?message=<font color=green> Ajout realise </font>'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=0133_frmsaisirV2.php?message=<font color=red> Probleme d'insertion... </font>'>";

?>