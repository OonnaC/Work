<?php
    include 'connect.php';
    
    // utilisation d'un alias
    $sql = "SELECT count(*) as nbre FROM user";
    $sth = $connexion->query($sql);
    $resultats = $sth->fetchAll();
    
    $nombre =$resultats[0]['nbre'];
    
    echo "Nombre d'enregistrements : $nombre.<br />";
    
    // Fermeture de la connexion
    $connexion = NULL;
?>