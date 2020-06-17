<?php @session_start();

	$id = session_id();
	
	session_destroy();

	echo "Session sess_$id detruite";

?>