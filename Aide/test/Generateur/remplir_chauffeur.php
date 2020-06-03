<?php
include 'connectAD.php';
include 'mail_random.php';

//les noms sont dans le fichier nom.txt
$nomfichier = 'nom.txt';
$tablonomfamille = file($nomfichier);

//les prenoms garcon sont dans le fichier garcon.txt
$nomfichier = 'garcon.txt';
$tabloprenomgarcon = file($nomfichier);
//les prenoms garcon sont dans le fichier garcon.txt
$nomfichier = 'fille.txt';
$tabloprenomfille = file($nomfichier);

//print_r($tabloprenomfille);

$id= 1;
// tant que $i est inferieur au nombre d'éléments du tableau...
for($i=0;$i<31;$i++) {
    
    if ($i%2==0){
        $idc = (string)$id;
        $sql="INSERT INTO chauffeur(CHFID, CHFNOM, CHFPRENOM, CHFTEL, CHFMAIL) VALUES ('".$idc."', '".$tablonomfamille[$i].
        "', '".$tabloprenomgarcon[$i]."', '".rand(600000000, 699999999)."', '".mailAleatoire()."' )";
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        $id++;
    
    }
    else{
        $idc = (string)$id;
        $sql="INSERT INTO chauffeur(CHFID, CHFNOM, CHFPRENOM, CHFTEL, CHFMAIL) VALUES ('".$idc."', '".$tablonomfamille[$i].
        "', '".$tabloprenomfille[$i]."', '".rand(600000000, 699999999)."', '".mailAleatoire()."')";
        echo "Sql : ".$sql."<br />";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        $id++;
    }
    
    if ($result){
        echo "Table modifiee";
    }
 
 /*
 INSERT INTO eleve(ideleve,nom,prenom,numclasse,datenaissance) VALUES (NULL ,'jkhjk','jkhjkh','12','2011-10-20')
 */
 
}


?>
