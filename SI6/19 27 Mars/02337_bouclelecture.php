<?php
  	//ouverture d'un fichier
  	$handle=fopen("test2.txt","r");

  	while (!feof($handle)) { //on parcourt toutes les lignes
  		
  		$uneLigne = fgets($handle); // lecture du contenu de la ligne
		//affichage du resultat
    	echo "$uneLigne<br />";
    	
	}

    //fermeture d'un fichier
    fclose($handle);
?>