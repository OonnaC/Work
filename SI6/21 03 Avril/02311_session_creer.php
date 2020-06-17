<?php @session_start();

	echo "N° de session : ".session_id()."<br />";

	$_SESSION['nom']="TOTO";
	$_SESSION['test']="bonjour";
	

	$_SESSION['nb']=12;
	$_SESSION['reel']=4.5;
	
	echo "Variable renseignee";

?>