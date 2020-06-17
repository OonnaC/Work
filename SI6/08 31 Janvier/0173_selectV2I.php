<?php
	include 'connectAD.php';

	$sql = "SELECT * FROM test";

	//$result = mysql_query($sql);
	$result = $connexion->query($sql);

	//while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	while ($row = $result->fetch_array(MYSQLI_BOTH)) {
		echo  $row[0]." -- ".$row[1]."<br />";
	}

	//mysql_free_result($result);
	$connexion->close();
?>