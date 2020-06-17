<?php

	echo "Adresse:"  .$_SERVER['SERVER_ADDR'];
	
	$ip =explode(".", $_SERVER['SERVER_ADDR']);
	@$link = mysql_connect("localhost", "root", "")
  
		or die("Impossible de se connecter : " . mysql_error());
	echo 'Connexion réussie <br />';
	@mysql_close($link);
	
?> 