<?php @session_start();

	echo "N° de session : ".session_id()."<br />";

	if(isset($_SESSION['test'])) {
      echo 'La variable de session TEST existe et vaut: ' . $_SESSION['test'];
	}
?>
