<?php 
	include "connectAD.php";
	
	$sql = "SELECT * from test order by numero";
		
	afficheRequete($sql);
	
	deconnexion();
?>