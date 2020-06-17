<?php

	$recherche="deux";
	$indice=1;
	$rangelement=0;

  	//ouverture d'un fichier
  	$handle=fopen("test2.txt","r");

    //boucle de lecture du fichier
  	while (!feof($handle) && ($rangelement==0)) { //on parcourt toutes les lignes on 
  		                                          // sort si on trouve
  		$uneLigne = fgets($handle); // lecture du contenu de la ligne
		//comaparaison en utilisant la fonction TRIM
	    if ($recherche == trim($uneLigne))
    		$rangelement=$indice;
    	$indice++;
	}
	
    //fermeture d'un fichier
    fclose($handle);

	if ($rangelement==0)
    	echo "Appartient pas...";
    else
    	echo "Appartient rang = $rangelement";

?>