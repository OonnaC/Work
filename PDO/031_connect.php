<?php
    $hote='localhost'; //le chemin vers le serveur
    $port='3307';
    $nom_bd='crudajax'; //le nom de votre base de données$
    $utilisateur='root'; //nom d'utilisateur pour se connecter
    $mot_passe=''; //mot de passe
    
    //creation du Data Source Name, ou DSN, qui contient les infos
    //requises pour se connecter à la base.
    $dsn='mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd;
    
    $connexion = new PDO($dsn, $utilisateur, $mot_passe);
    
    var_dump($connexion);
    
    /*$hote='localhost'; //le chemin vers le serveur
    $port='3306';
    $nom_bd='id7206880_slam4'; //le nom de votre base de données$
    $utilisateur='id7206880_student'; //nom d'utilisateur pour se connecter
    $mot_passe='Iroise29'; //mot de passe
    
    //creation du Data Source Name, ou DSN, qui contient les infos
    //requises pour se connecter à la base.
    $dsn='mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd;
    
    echo $dsn."<br />";
    
    $connexion = new PDO($dsn, $utilisateur, $mot_passe);
    
    var_dump($connexion);*/