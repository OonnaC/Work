<?php
//Réalisation de la connexion avec la base de données
include"connectAD.php";

//Génération immatriculation
function ImmatVehicule () {
    
    //Définition de la taille des chaînes
    $taille = rand(2,2);
    $taille1 = rand(3,3);
    
    //Tableau des lettres de l'alphabet pour la construction de l'immatriculation
    $c1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    
    //Tableau des chiffres allant de 0 à 9
    $c2 = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    
    //Création de variables vide
    $code="";
    $code1="";
    
    // Génération du code de façon aléatoire (partie composée de lettres)
    for ($i=0;$i<$taille;$i++) {
        $code .= ($i%2==0)?$c1[rand(0, count($c1)-1)]:$c1[rand(0, count($c1)-1)];
        $code1 .= ($i%2==0)?$c1[rand(0, count($c1)-1)]:$c1[rand(0, count($c1)-1)];
    }
    //Création d'une variable vide
    $code2="";
    
    //Génération du code de façon aléatoire (partie composée de chiffres)
    for ($i=0;$i<$taille1;$i++) {
        $code2 .= ($i%2==0)?$c2[rand(0, count($c2)-1)]:$c2[rand(0, count($c2)-1)];
    }
    //Création de la variable $immat composée de la partie chiffres et de lettres
    $imma = $code."-".$code2."-".$code1;
    return $imma;
}

//On récupère les marques des véhicules provenant d'un tableau
$tabloNomVehi = array('Renault','Peugeot','Citroën','Opel','Iveco','Volvo','Krone','Fruehauf','Serrus','Kaiser','Man','Daf');

//On rassemble les éléments d'un tableau en une chaîne puis on scinde une chaîne de caractères en segments
$marque = implode(",",$tabloNomVehi);
$laMarque = (explode(',', $marque));

//Choix d'une marque de voiture de façon aléatoire
$i=0;
while ($i<16) {
    $Immat = ImmatVehicule(); //Appel à la fonction pour re-générer l'immmatriculation
    $uneMarque=$laMarque[rand(0, count($laMarque)-1)]; //Appel à la fonction pour faire des marques différentes dans la base
    $i=$i+1;
    $sql = "INSERT INTO VEHICULE(VEHIMMAT,VEHNOM) VALUES(\"$Immat\",\"$uneMarque\");";
    $result = executeSQL_GE($sql); //Utilisation executeSQL_GE($sql) pour la gestion des erreurs
}
?>