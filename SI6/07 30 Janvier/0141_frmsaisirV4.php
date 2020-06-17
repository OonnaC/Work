<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Saisir les information</title>
</head>

<body>

	<form id="formulaire" action="0142_insertinfoV4.php" method="get">

		<fieldset>
		    <legend>INFORMATION : </legend>
			<label for="information">Information : </label>
			<input id="information" name="information" type="text"  size="10" maxlength="8"/>

        	<?php
    				if (isset($_GET['message']))
    					echo $_GET['message'];
    				else
    					echo "&nbsp;";
    		?>

        </fieldset>

        <p>
	    	<input id="effacer" name="effacer" type="reset" value="Effacer" title="" />
	    	<input id="envoyer" name="envoyer" type="submit" value="Envoyer" title="" />
	    </p>

	</form>

</body>

</html>