<?php
    echo "Liste des drivers PDO<br />";
	foreach (PDO::getAvailableDrivers() as $driver) {
		echo $driver,"<br />";
	}

	echo "<hr />";