<?php

	$host="127.0.0.1";
	$username="root";
	$password="";
	$db_name="si6";

    $link = mysql_connect("$host", "$username", "$password")
        or die("Impossible de se connecter au serveur : " . mysql_error());
    $connexion = mysql_select_db("$db_name")
        or die("Impossible d'ouvrir la base : ".mysql_error());

?>