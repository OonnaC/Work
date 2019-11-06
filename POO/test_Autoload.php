<?php
	spl_autoload_register(function ($class) {
		include 'classes/'.$class.'.class.php';
	});
	
	//test de la classe compte
	$monCompte1 = new compte(123,100);
	$monCompte1->afficheCompte();
	echo "<br />";
	
	//test de la classe CompteCheque
	$monCompteCheque = new compteCheque(456,200,5000);
	$monCompteCheque->afficheCompte();

?>