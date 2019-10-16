/*
 * Bibliothèque de fonctions
 * 
 * Oonna CHAPALAIN BTS SIO2
 * 
 * Version 1.0
 */

var compt = 0;

// Fonction du programme 02_afficheHelloJS.php
function afficheHelloWorld()
{
	
	alert("Hello World");
	console.log('Coucou');
}

// Fonction du programme 03_afficheMessageJS.php
function afficheMessage(unMsg)
{
	console.log(unMsg);
	alert("Hello "+ unMsg);
	console.log('Théo');
}

//Fonction du programme 06_PromptJSV2.php
function affichePrompt()
{
	var name = window.prompt('Entrer votre nom : ', 'Nom par défaut')
	alert("Hello, "+name+ "!");
    console.log(name);
}

//Fonction du programme 08_VerifChampJSV2.php
function VerifChamp()
{
	var greeting = '   Hello world!   ';
	
	console.log(greeting);
	// expected output: "   Hello world!   ";
	
	console.log(greeting.trim());
	// expected output: "Hello world!";
}

//Fonction du programme 10_ModifCssJS.php
function randomColor()
{
	var chars = "0123456789abcdef";
	var color = "#";
	for (var i=0; i<6; i++) {
		var rnd = Math.floor(16 * Math.random());
		color += chars.charAt(rnd);
	}
	return color;
}

//Fonction du programme 11_TestChampJS.php
function IsNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode;
 	if (charCode > 31 && (charCode < 48 || charCode > 57))
  		return false;

    return true;
}

function IsRealNumberKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode;
	if (charCode == 46) {
		compt ++;
		if (compt<2)
			return true;
		else
			return false;
	}
 	if (charCode > 31 && (charCode < 48 || charCode > 57))
  		return false;

    return true;
}

function IsaLPHAKey(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode;
 	if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122))
  		return false;

    return true;
}

//Fonction du programme 12_TestFormulaireJS.php
function testform()
{
  var chaine="";

  elt=document.forms['formulaire'].elements['info'];
  if (elt.value == "") {
    chaine=chaine + " Information";
  }

 
  if (chaine=="") {
     	alert ('ok');
     	return true;
  }
  else {
    document.getElementById('erreur').style.color="red";
    document.getElementById('erreur').innerHTML ="TEST COTE CLIENT : Renseigner le champ : - "+chaine;
    return false;
  }
}

function testform2()
{
  var chaine="";

  elt=document.forms['formulaire'].elements['info'];
  if (elt.value == "") {
    chaine=chaine + " Information";
  }
  
  elt=document.forms['formulaire'].elements['avis'];
  if (elt.value == "") {
    chaine=chaine + " Avis";
  }

 
  if (chaine=="") {
     	alert ('ok');
     	return true;
  }
  else {
    document.getElementById('erreur').style.color="red";
    document.getElementById('erreur').innerHTML ="TEST COTE CLIENT : Renseigner le champ : - "+chaine;
    return false;
  }
}

//Fonction du programme 13_synchroJS.php
function sleep(milliSeconds){
	var startTime = new Date().getTime(); 	// recupere l’heure systeme
	while (new Date().getTime() < startTime + milliSeconds);
		// temporise grace a une boucle
	}


