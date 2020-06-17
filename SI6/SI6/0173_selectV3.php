<?php

	include 'connectAD.php';
	
	//on va chercher tous les infos de la table test
	$sql = "SELECT * FROM test";
	
	//on recupere le resultat sous forme d'1 tableau
	$results = tableSQL($sql);
	
	//pour chaque ligne du tableau $resultats
	foreach ($results as $ligne) {
		//on extrait chaque valeur de la ligne courante
		$numero = $ligne[0];
		$info = $ligne[1];
		
		//on affiche la ligne courante
		echo  $numero." - ".$info."<br/>";
	}
	
	// 3 lignes select 1 haut, 1 bas echo $numero->$select
?>