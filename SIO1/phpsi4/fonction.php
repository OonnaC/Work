<?php

	$maChaine="Choucroute";
	echo "Taille de la chaine \"$maChaine\" : ".strlen($maChaine);
	echo"<br />";

	$monCar="B";
	echo "Code ASCII du '$monCar' :" .ord($monCar);
	echo"<br />";

	$monEntier=72;
	echo "Caractere ASCII correspondant au \"$monEntier\" : ".chr($monEntier);
	echo"<br />";

	$maChaine="1234";
	echo "Conversion de type et addiction: ".(integer)$maChaine+=1;
	echo"<br />";

	$monEntier=1234;
	echo "Conversion de type et concatenation: ".(string)$monEntier."1";
	echo"<br />";

?>