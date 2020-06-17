<?php
  	//ouverture d'un fichier
  	$handle=fopen("test.txt","r");
  	//lecture de la ligne courante dans le fichier
	$uneLigne=fgets($handle);
    echo "<br /> : $uneLigne";
    //fermeture d'un fichier
    echo "<br /> Ressource : $handle";
    fclose($handle);
?>

echo dirname("test.txt");
//affichage du resultat