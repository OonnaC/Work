<?php
include 'connectAD.php';

$sql = "SELECT * FROM test"; 

$nblignes = compteSQL($connexion,$sql);

echo "il y a ".$nblignes." enregistrements<br />";

?>
