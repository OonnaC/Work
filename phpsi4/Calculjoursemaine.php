<?php

	$annee=$_GET['annee'];
	$mois=$_GET['mois'];
	$jour=$_GET['jour'];
	
	
	
	
	
	$k=$jour+2*$mois+(3*$mois+3/5)+$annee+($annee/4)+($annee/100)
	$joursemaine=0;
	
	
	
	switch ($joursemaine) {
		case 0:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Dimanche";
			break;
		case 1:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Lundi";
			break;
		case 2:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Mardi";
			break;
		case 3:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Mercredi";
			break;
		case 4:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Jeudi";
			break;
		case 5:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Vendredi";
			break;
		case 6:
			echo "Le ".$jour."/".$mois."/".$semaine." �tait un Samedi";
			break;
			
		//$joursemaine=$k%7+1;
	}
	