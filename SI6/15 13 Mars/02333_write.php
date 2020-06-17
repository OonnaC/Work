<?php
  	//ouverture d'un fichier
  	$handle=fopen("test.txt","w");
	//ecriture dans le fichier
	$cpt = fwrite($handle,"Hello world...");
    //fermeture d'un fichier
    echo "$cpt carateres ";
    fclose($handle);
?>