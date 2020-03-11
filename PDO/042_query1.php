<?php
    include 'connect.php';
    
    // on va chercher tous les infos de la table
    $resultats=$connexion->query("SELECT * FROM user");
    
    // on r�cup�re le r�sultat sous forme d'objet
    $resultats->setFetchMode(PDO::FETCH_OBJ);
    
    // on r�cup�re la liste des infos
    while( $ligne = $resultats->fetch() )
    {
        // on affiche les infos
        echo "Information : $ligne->login <br />";
    }
    
    // on ferme le curseur des r�sultats
    $resultats->closeCursor();
    // Fermeture de la connexion
    $connexion = NULL;
?>