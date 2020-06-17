<?php
	include 'connect.php';
	
	//on recupere les varirable issue du formulaire
	$numero=$_GET['numero'];
		
	$sql = "DELETE FROM test WHERE numero=".$numero;
	
	$result = mysql_query($sql);
	
	if ($result)
		echo "<meta http-equiv='refresh' content='0;url=0185_frmsuprV2.php?message=<font color=green> Suppression realisee </font>'>";
	else 
		echo "<meta http-equiv='refresh' content='0;url=0185_frmsuprV2.php?message=<font color=red> Le numero existe deja... </font>'>";			

?>