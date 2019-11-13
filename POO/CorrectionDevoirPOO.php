<html>

<div class= "tarif" >
<h2>Tarifs de l'année <?php echo $anne ?></h2>
<table id="grille">
<thead>
<tr>
<th>Quotient</th>
<th>Cours Individual</th>
<th>Cours collecif</th>
</tr>
</thead>

<?php 

$i=0;

//CORRECTION PARTIE 1
$i++;
echo "<tr class=\"altrow\">"; //1ers lignes grises
echo "<td>EXT</td>";
//parcours du dictionnaire lesTypesCours
foreach ($lesTypesCours as $typesCours_id=>$typesCours){
    echo "<td>";
    //on récupère le prix du cours
    echo $typesCours->getPrixExterieur();
    echo "</td>";
}
echo "</tr>";


//ANCIEN CODE A MODIFIER

/*foreach($lesTranches as $tran_id=>$tranche){
    if($i%2){
        echo "<tr class=\"altrow\">";
    }
    else{
        echo"<tr>";
    }
    $i++;
    echo"<td>";
    if($i<count($lesTranches)){
        echo $tranche->getQuotientMin()." à ".$tranche->getQuotientMax();
    }
    else{
        echo $tranche->getQuotientMin(). " et supérieur";
    }
    echo "<td>";
    foreach ($lesTypesCours as $typeCours_id=>$typeCours){
        echo "<td>";
        echo $lesTarifs[$typeCours_id][$tran_id];
        echo "</td>";
    }
    echo "</tr>";
}
*/

?>

</table>
</div>

</html>