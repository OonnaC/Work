<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	
	<title>Test de JavaScript dans un navigateur V2</title>


<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	
	<script type="text/javascript" src="mesFonctions.js"></script>
		
	<title>Test de JavaScript dans un navigateur</title>
</head>

<body>

	<p>
		<input type="button"
			   onclick="if(window.confirm('Supprimer le champ choisi?'))
				        alert('Supprime.');
			   else
				   alert('Ne supprime pas.');
				    "
			   value="Supprimer" />
	</p>	
	
	
</body>

</html>