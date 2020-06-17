<?php
  	//ouverture d'un fichier
  	$handle=fopen("compteur.txt","r");
  	//lecture du compteur dans le fichier
	$unCompteur=fgets($handle);
    //fermeture d'un fichier
    fclose($handle);    

    // incremente le compteur
    $unCompteur++;
    //affiche le résultat
    echo "NOMBRE DE VISITES : $unCompteur";  
    
    //ouverture d'un fichier
    $handle=fopen("compteur.txt","w");
    //ecriture du compteur dans le fichier
    fwrite($handle,$unCompteur);
    //fermeture d'un fichier
    fclose($handle);
?>