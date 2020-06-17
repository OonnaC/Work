<?php
	include 'connect.php';
	
	$sql = "SELECT * FROM test";
	$result = mysql_query($sql) 
		or die("Erreur SQL");
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
 		echo $row['numero']." - ".$row['info']."<br />";
  	}					
?>