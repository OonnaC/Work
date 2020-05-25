<?php

	$motpalindr=$_GET['formpalindrome'];
		
		
	$longmot=strlen($motpalindr);
	$string=$motpalindr;
		
	echo "Chaine : ".$motpalindr."<br />";
		
	echo "Longueur : ".$longmot."<br />";
	
	$boucle=(int)($longmot/2);
	
	for ($i=0;$i<$boucle;$i=$i+1)
	{
		
		$lettreP = substr($motpalindr,$i,1);
		$lettreD = substr($motpalindr,$longmot-1-$i,1);
		echo"P :".$lettreP." - D :".$lettreD."<br />";
		
	}
	if ($lettreP==$lettreD)
	{
		echo "C'est un PALINDROME";
	}
	else
	{
		echo "PAS UN PALINDROME";
	}
	
?>