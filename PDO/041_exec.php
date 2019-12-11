<?php

    $hote='localhost'; //le chemin vers le serveur
    $port='3307';
    $nom_bd='crudajax'; //le nom de votre base de données$
    $utilisateur='root'; //nom d'utilisateur pour se connecter
    $mot_passe=''; //mot de passe
    
    //creation du Data Source Name, ou DSN, qui contient les infos
    //requises pour se connecter à la base.
    $dsn='mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd;
    
    try
    {
        $connexion = new PDO($dsn, $utilisateur, $mot_passe);
    }
    
    catch (Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo'N° : '.$e->getCode();
        die();
    }
    $sql = "INSERT INTO user(login,password, email) VALUES ('oonna','password','monemail@laposte.net');";
    //$sql = "INSERT INTO `test` (`numero`,`info`) VALUES ('45','Erwan2');";
    $nombre_changement = $connexion->exec($sql);
    echo "La requ&ecirc;te a modifi&eacute; : $nombre_changement lignes.";