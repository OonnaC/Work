<?php
	
	$comptvoyelle=$_GET['formcompteurvoyelle'];
		

	$longmot=strlen($comptvoyelle);
	$nbrevoyelles=0;
	
    echo "Chaine : ".$comptvoyelle."<br />";
 
	echo "Longueur : ".$longmot."<br />";
	
	
	for ($i=0;$i<$longmot;$i++)
	{
		
		substr($comptvoyelle,$i,1);
		$lettre = substr($comptvoyelle, $i,1);
		if ($lettre=='u' or $lettre=='U' or $lettre=='o' or $lettre=='O' or $lettre=='a' or $lettre=='A' or $lettre=='e' or $lettre=='E' or $lettre=='i' or $lettre=='I' or $lettre=='y' or $lettre=='Y')
		{
			$nbrevoyelles=$nbrevoyelles+1;
		}

	}
	echo "Nombre de voyelles :".$nbrevoyelles."<br />";
?>