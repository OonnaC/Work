<?php
	$utilisateur =  $_SERVER['PHP_AUTH_USER'];
	echo "<h2><center>Bonjour $utilisateur, bienvenue dans la zone d'administration</center></h2>";
	
	echo "<br /> PWD  : ".$_SERVER['PHP_AUTH_PW']; // pour le mot de passe
?>