<?php
	//include 'php\mesfonctions.php';
	//affichage des erreurs  dans un fichier
	//set_error_handler("errorlog");  //set your own Handler
	//restore_error_handler(); //restore the old handler

	// programme PHP qui permet de creer la base de donne '$db_name' generee par PhpMyAdmin
	// (ou par dump.php )et qui se trouve dans le repertoire '$repertoire'

	include 'connect.php';
	
	//desactive les cle etrangere pour pouvoir effacer les tables de la base
	$sql = "SET FOREIGN_KEY_CHECKS = 0";
	echo "SQL : $sql<br/>";
	$result = mysql_query($sql)
		or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");
	

	//quelques informations importantes
    $ipsrv=$_SERVER['SERVER_ADDR'];
    $versionPHP=getenv("SERVER_SOFTWARE");
    $namesrv=$_SERVER['SERVER_NAME'];


   //si la base existe on supprime les tables
    if ($connexion) {
    	
		$tables = mysql_query("SHOW tables");
		while ($donnees = mysql_fetch_row($tables)){
	    	$sql = "DROP TABLE `$donnees[0]`";
	    	echo "SQL : $sql<br/>";
 			$result = mysql_query($sql)
  				or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");
	 	}

    } else {

        //sinon on cree la base
    	$sql="CREATE DATABASE `$db_name` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
    	echo "SQL : $sql<br/>";
    	$result = mysql_query($sql)
 			or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");

    }

	//on utilise la base de donnees
  	$sql="USE `$db_name`";
  	echo "SQL : $sql<br/>";
 	$result = mysql_query($sql)
  		or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");

	$versionMySQL=mysql_get_server_info();

    //restaure la base en fonction du fichier creer par le dump (V2)
    //Lit le fichier et renvoie le résultat dans un tableau
	$lines = file($db_name."_V2.sql");
    $versionBase=$lines[1];

    $sql="";

    //execute toutes les requetes du fichier de dump
    for($i=0;$i<count($lines);$i++){
		$line=$lines[$i];
		if ($line[0]!='-' && $line[0]!='/' && strlen($line)>2) {
			$sql=$sql.$line;
			$test=strrev($line);
			$pospv=strpos($test,";");
			if ($pospv>0 && $pospv<5){
				echo "SQL : $sql<br/>";
				$result = mysql_query($sql)
  					or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");
				$sql="";
			}
		}
	}
	
	//reactive les cle etrangere 
	$sql = "SET FOREIGN_KEY_CHECKS = 1";
	echo "SQL : $sql<br/>";
	$result = mysql_query($sql)
	or die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".mysql_error()."<br /><br /><b>REQUETE SQL : </b>$sql<br />");

	$versionBase= substr($versionBase,23+strlen($db_name),strlen($versionBase)-23-strlen($db_name));
	$versionBase = str_replace("à","<br />",$versionBase);

	echo "<font color=green> Version base  $db_name <br /> $versionBase <br />$namesrv(IP : $ipsrv)<br />$versionPHP<br />MySQL : $versionMySQL</font>";

?>