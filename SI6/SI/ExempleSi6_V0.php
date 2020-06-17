<?php

	include "connect.php";
	$handle=fopen("dumpV0.txt","w");
	$sql="show tables";
	
	$result=tableSQL($sql);

	foreach ($result as $ligne) {
		//on extrait chaque valeur de la ligne courante

			echo "<br/>$ligne[0]<br/>";
			
			$sql="show create table $ligne[0];";
			echo "$sql";
			
			$result2=tableSQL($sql);
			echo $result2[0][1];
			
		
		fwrite($handle, $result2[0][1]);
		
	}			
	fclose($handle);
?>