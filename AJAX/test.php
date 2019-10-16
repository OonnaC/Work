<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF8" />
	<meta http-equiv="content-language" content="fr" />
	<title>Test SLAM4 Ajax</title>
	<script type="text/javascript" src="ajax.js"></script>
</head>

<body>
      <form method="get" >
      	<div id="monFormulaire">
            Entrer un nombre : 
            <input id="nombre" name="nombre" type="text" size="20" maxlength="10" />
            <br />
            <input id="ajoute" name="ajoute" type="button" value="Ajoute un" 
                   onclick="ajaxx('ajouteun.php?nombre='+(document.getElementById('nombre').value), 'affiche')"/>
            <div id="affiche">
            	&nbsp;
            </div>
        </div>
      </form>
</body>
</html>