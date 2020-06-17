<?php
	
	include 'connectAD.php';
	
	$result = mysql_query("SELECT * FROM test");
	
	while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
		echo "info : ".$row[0]. $row[1]."<br />";
	}
	
	mysql_free_result($result);
	
?>