<?php
	//creation du tableau de resultats
	$tabcompteur = array();
	//ouverture d'un fichier
  	$handle=fopen("log.txt","r");	 	
  
  	//on parcourt toutes les lignes
  	while (!feof($handle)) { 
  		// lecture du contenu de la ligne
  		$login = trim(fgets($handle)); 
		//TEST le login existe deja dans le 'Dictionnaire' - 'Tableau associatif'
		if (array_key_exists($login, $tabcompteur))
			//oui : ajoute 1 a l'element correspondant
    		$tabcompteur["$login"] += 1;
		else 
			//non : on cree l'element avec la valeur 1
			$tabcompteur["$login"] = 1;
	}
	//fermeture d'un fichier
	fclose($handle);
	 
	//pour toutes les lignes du tableau 
	foreach($tabcompteur as $key => $value)
	{
		//affichage du resultat
	    echo "Util : $key - Connexion(s) : $value <br />";
	}	 
	
?>