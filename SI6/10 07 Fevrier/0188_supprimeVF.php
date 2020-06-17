<?php
	include 'connectAD.php';
	
	//on recupere les varirable issue du formulaire
	$numero=$_GET['numero'];
		
	$sql = "DELETE FROM test WHERE numero=".$numero;
	
	$result = executeSQL($sql);
	
	if ($result)
		echo "<meta http-equiv='refresh' content='0;url=0187_frmsuprVF.php?message=<font color=green> Suppression realisee </font>'>";
	else 
		echo "<meta http-equiv='refresh' content='0;url=0187_frmsuprVF.php?message=<font color=red> Probleme de suppression... </font>'>";			

?>
