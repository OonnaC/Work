<?php
	include 'connect.php';
	
	$sql = "SELECT * FROM test";
	$result = mysql_query($sql) 
		or die("Erreur SQL");
	
	while ($rows = mysql_fetch_array($result, MYSQL_NUM)) {
 		echo $rows[0]." - ".$rows[1]."<br />";
  	}					
?>