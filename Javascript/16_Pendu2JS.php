<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Jeu du Pendu en JavaScript</title>


	<script type="text/javascript">

function play()
{
var myst_word='';
var prop_word='';
var prev_word='';
var c = 0;
var prop_char = 0;
var i, len_word;
var found = 0;
var nbr_tries = 10;
var still_true = false;
var nbr_rand = 0;
var compteur=0;

//rajoutez vous mots ici :
var dico = new Array ("JAVASCRIPT", "EDITEUR", "AJAX","DEVELOPPEUR","GALINETTE","ORACLE","MYSQL","GAGNE",
		"PERDU","BRAVO","WORK","WANKIL","CODAGE","TELEGRAMME","PROFESSEUR");

nbr_rand = Math.round(Math.random()*(dico.length));

myst_word = dico[nbr_rand];
len_word = myst_word.length;

for(i = 0; i <= len_word; i++)
	prop_word += '*';

document.getElementById('sortietxt').innerHTML = "";

while(found < len_word && nbr_tries > 0)
{
	compteur++;
	document.getElementById('sortietxt').innerHTML = "<b>Trouvez le mot : ";

	for(i = 0;i <= myst_word.length; i++)
	{
		c = myst_word.charAt(i);
		if(prop_word.indexOf(c) > -1)
			document.getElementById('sortietxt').innerHTML += c;
		else
			document.getElementById('sortietxt').innerHTML += '*';
	}

	document.getElementById('sortietxt').innerHTML += "</b><br />";

	nbr_tries2 = nbr_tries;

	if(nbr_tries2 > 1)
		document.getElementById('sortietxt').innerHTML += "<br />Il vous reste "+nbr_tries2+" essais";
	else
		if(nbr_tries2 == 1)
			document.getElementById('sortietxt').innerHTML += "<br />Il vous reste 1 essai";

	document.getElementById('sortietxt').innerHTML += "<br /><br />Proposez une lettre : ";
	prop_char = prompt("Proposez une lettre :", prop_char);
	prop_char = prop_char.toUpperCase();
	
	document.getElementById('lettrejouee').innerHTML += prop_char+" ";
	
	document.getElementById('sortietxt').innerHTML += prop_char;

	prev_word = prop_word;
	for(i = 0;i <= myst_word.length; i++)
	{
 		c = myst_word.charAt(i);
 		if(prop_char == c)
 		{
  			if(!still_true)
  				still_true = true;

  			if(prev_word.indexOf(c) <= -1)
  			{
  				prop_word += c;
  				found++;
  			};
 		};
	}

	if(!still_true)
		nbr_tries--;
	else
		still_true = false;

	document.getElementById('sortietxt').innerHTML += "<br /> <br />";

}//while(found < len_word && nbr_tries > 0)

if(nbr_tries > 0)
	document.getElementById('sortietxt').innerHTML += "Gagne ! en "+compteur+" essais<br />";
else
	document.getElementById('sortietxt').innerHTML += "Pendu !<br />";

document.getElementById('sortietxt').innerHTML += "Le mot etait : "+myst_word+"<br />";
}

</script>

</head>

<body>

	<form id="form">
		<fieldset>
			<input type="button" onclick="play()" value="Commencer" />
		</fieldset>
	</form>

	<div id="sortietxt" style="border:1px black solid;padding:5px;background:#D7DDE6">
		Cliquez sur le bouton pour commencer
	</div>

	<div id="lettrejouee">
		Lettres jouees :
	</div>
	
</body>
</html>