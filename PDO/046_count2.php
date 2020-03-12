<?php
    include 'connect.php';
    
    // utilisation de la taille du tableau
    $sql = "SELECT * FROM user";
    $sth = $connexion->query($sql);
    $resultats = $sth->fetchAll();
    
    $nombre =count($resultats);
    
    echo "Nombre d'enregistrements : $nombre.<br />";
    
    // Fermeture de la connexion
    $connexion = NULL;
?>