<?php

    //Réalisation de la connexion avec la base de données
    include"lib/php/connectAD.php";
    
    //on récupère les marques des véhicules provenant d'un fichier text
    $nomVehi = 'nomVehi.txt';
    
    //Lit le fichier et renvoie le résultat dans un tableau
    $tabloNomVehi = file($nomVehi);
    
    /*for ($i=0;$i<sizeof($tabloNomVehi);$i++){
        
        echo"";
        
        $sql = "INSERT INTO VEHICULE(VEHIMMAT,VEHNOM) VALUES(0,$tabloNomVehi);";
        
        $result = executeSQL($sql);
        
        if($result){
            echo "Insertion réussie";
        } else {
            echo "Erreur ...";
        }
     
    }*/

    // definition de la taille de la chaine
    $taille = 3;
    //tableau de l'alphabet
    $c1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    //tableau des chiffres
    $c2 = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    
    $code="";
    $code_2="";
    $code_3="";
    //generation du code
    for ($i=1;$i<$taille;$i++) {
        $code .= ($i%2==0)?$c1[rand(0, count($c1)-1)]:$c1[rand(0, count($c1)-1)];
    }
    
    echo $code;
?>