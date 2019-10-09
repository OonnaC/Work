<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	
	<script type="text/javascript" src="mesFonctions.js"></script>	
	
	<title>Test de remplissage des champs dans un formulaire</title>

</head>

<body>

	<form id="formulaire" action="" method="get" onsubmit="return testform2()">

		<fieldset>
		    <legend>ENTRER UNE INFORMATION: </legend>
			<label for="info" >Information : </label>
			<input id="info" name="info" type="text" value="" size="10" maxlength="8" />
			<!-- Test avec un 2ème champ dans le formulaire -->
			<br><br />
			<label for="avis" >Avis : </label>
			<input id="avis" name="avis" type="text" value="" size="10" maxlength="8" />
        </fieldset>
   

   		<div id="erreur">&nbsp;</div>

        <p>
	    	<input id="envoyer" name="envoyer" type="submit" value="Envoyer" title="" />
	    </p>

	</form>
	
</body>

</html>