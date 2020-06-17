<?php

	// QUESTION N°1
	// =-=--=-=-=-=

  	//ouverture d'un fichier
  	$handle=fopen("test.txt","w");
	//ecriture dans le fichier
	fwrite($handle,date("j M Y ---- H:i:s"));
    //fermeture d'un fichier
    fclose($handle);

?>

