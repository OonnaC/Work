<?php
    include 'connect.php';
    
    // on va chercher tous les infos de la table
    $sql = "SELECT * FROM user";
    $sth=$connexion->query($sql);
    $resultats = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($resultats as $row){
        echo "Information : ". $row['login']."<br />";
    }
    
    // Fermeture de la connexion
    $connexion = NULL;
?>