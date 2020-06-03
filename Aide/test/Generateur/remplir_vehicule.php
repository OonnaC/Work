<?php
//R�alisation de la connexion avec la base de donn�es
include"connectAD.php";

//G�n�ration immatriculation
function ImmatVehicule () {
    
    //D�finition de la taille des cha�nes
    $taille = rand(2,2);
    $taille1 = rand(3,3);
    
    //Tableau des lettres de l'alphabet pour la construction de l'immatriculation
    $c1 = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    
    //Tableau des chiffres allant de 0 � 9
    $c2 = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    
    //Cr�ation de variables vide
    $code="";
    $code1="";
    
    // G�n�ration du code de fa�on al�atoire (partie compos�e de lettres)
    for ($i=0;$i<$taille;$i++) {
        $code .= ($i%2==0)?$c1[rand(0, count($c1)-1)]:$c1[rand(0, count($c1)-1)];
        $code1 .= ($i%2==0)?$c1[rand(0, count($c1)-1)]:$c1[rand(0, count($c1)-1)];
    }
    //Cr�ation d'une variable vide
    $code2="";
    
    //G�n�ration du code de fa�on al�atoire (partie compos�e de chiffres)
    for ($i=0;$i<$taille1;$i++) {
        $code2 .= ($i%2==0)?$c2[rand(0, count($c2)-1)]:$c2[rand(0, count($c2)-1)];
    }
    //Cr�ation de la variable $immat compos�e de la partie chiffres et de lettres
    $imma = $code."-".$code2."-".$code1;
    return $imma;
}

//On r�cup�re les marques des v�hicules provenant d'un tableau
$tabloNomVehi = array('Renault','Peugeot','Citro�n','Opel','Iveco','Volvo','Krone','Fruehauf','Serrus','Kaiser','Man','Daf');

//On rassemble les �l�ments d'un tableau en une cha�ne puis on scinde une cha�ne de caract�res en segments
$marque = implode(",",$tabloNomVehi);
$laMarque = (explode(',', $marque));

//Choix d'une marque de voiture de fa�on al�atoire
$i=0;
while ($i<16) {
    $Immat = ImmatVehicule(); //Appel � la fonction pour re-g�n�rer l'immmatriculation
    $uneMarque=$laMarque[rand(0, count($laMarque)-1)]; //Appel � la fonction pour faire des marques diff�rentes dans la base
    $i=$i+1;
    $sql = "INSERT INTO VEHICULE(VEHIMMAT,VEHNOM) VALUES(\"$Immat\",\"$uneMarque\");";
    $result = executeSQL_GE($sql); //Utilisation executeSQL_GE($sql) pour la gestion des erreurs
}
?>