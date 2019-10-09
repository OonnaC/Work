<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	
	<title>Test de JavaScript dans un navigateur V11</title>


<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	
	<script type="text/javascript" src="mesFonctions.js"></script>
		
	<title>Test de JavaScript dans un navigateur</title>
</head>

<body>

	<p>
		<label for="information">Test nombre entier: </label>
		<!-- Gérer le contenu d'un champ -->   
		<input id="information"
			   name="information"
			   type="text"
			   onkeypress="return IsNumberKey(event)"/>
			   
		<br />	   
		<label for="informationR">Test nombre r&eacute;el: </label>
		<!-- Gérer le contenu d'un champ -->   
		<input id="informationR"
			   name="informationR"
			   type="text"
			   onkeypress="return IsRealNumberKey(event)"/>
		
		<br />	   
		<label for="informationA">Test chaine: </label>
		<!-- Gérer le contenu d'un champ -->   
		<input id="informationA"
			   name="informationA"
			   type="text"
			   onkeypress="return IsAlphaKey(event)"/>
		

	</p>	
	
	
</body>

</html>