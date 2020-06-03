<?php

	include"lib/php/connectAD.php";
	//include"tablechauffeur.php";
	//$IdChau=$_GET[''];



	//tableau des chiffres
	//$c1 = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	//$trnnum=0;
	//generation de l'identifiant de la table tournee
	for($i=0;$i<sizeof();$i++){
	
	$trnnum=$i;
	$vehimmat=;
	$chfid=;
	$trncommentaire=;
	$trnpecchauffeur=;
	$trndte=;
	
	}
	
	
	$sql= "INSERT INTO TOURNEE (TRNNUM,VEHIMMAT,CHFID,TRNCOMMENTAIRE,TRNPECCHAUFFEUR,TRNDTE)
			VALUES($trnnum,$vehimmat,$chfid,NULL,$trnpecchauffeur,$trndte);";
	
	
	
	//vérification de la longueur de la tournee
	if (strlen($trnnum) < pow(10,32)){
		echo '' . $trnnum . '<br />';
	}
	
	
	//generation du code
	/*for ($i=1;$i<13;$i++) {
		$trnnum.= ($i%2==0)?$c1[rand(0, count($c1)-1)]:$c1[rand(0, count($c1)-1)];
		
	}*/

//	return $trnnum;
//}

//echo num_tournee();

/*$sql="INSERT INTO tournee (trnnum,vehimmat,chfid,trncommentaire,trnpecchauffeur,trndte)
 VALUES ($trnnum,'789456','258493',NULL,NULL,NULL)";

$result=executeSQL($sql);

if ($result)
	echo "<br />Table modifiee";
	/*else
	 die ("Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"]."</b>.<br />
	 Dans le fichier : ".__FILE__." a la ligne : ".__LINE__."<br />".
	 mysqli_error_list($connexion)[0]['error'].
	 "<br /><br />
	 <b>REQUETE SQL : </b>$sql<br />");*/
	
	/*deconnexion();*/


?>