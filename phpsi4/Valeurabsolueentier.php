<?php

	$nombre=$_GET['nombre'];
	
	if($nombre>0)
		
		{ 
		echo "Valeur absolue de ".$nombre." = ".$nombre;
		} 
	
	else 
		
		{ 
		echo "Valeur absolue de ".$nombre." = ".$nombre*-1;
		}
	
?>