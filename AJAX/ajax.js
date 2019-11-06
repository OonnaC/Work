/**
 * 
 */

var xmlhttp

function ajaxx(url,laDiv)
{
        // On g�n�re un objet xmlhttp
        xmlhttp=GetXmlHttpObject();
        // Test si le navigateur est compatible ajax
        if (xmlhttp==null) {
                  alert ("Your browser does not support AJAX!");
                  return;
         }

        // Fonction qu'on execute a chaque changement d'�tat du serveur
        xmlhttp.onreadystatechange=function() {
                // On execute les operations quand le serveur est pret
                if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
                        document.getElementById(laDiv).innerHTML=xmlhttp.responseText;
                }

        }

        // On ouvre le traitement (asynchrone)
        //xmlhttp.open("GET",url,true);
        // On ouvre le traitement synchrone
        xmlhttp.open("GET",url,false);
        // On passe les param�tres n�cessaires
        xmlhttp.send(null);
}

function GetXmlHttpObject()
{
        if (window.XMLHttpRequest)
          {
                  // code for IE7+, Firefox, Chrome, Opera, Safari
                  return new XMLHttpRequest();
          }
        if (window.ActiveXObject)
          {
                  // code for IE6, IE5
                  return new ActiveXObject("Microsoft.XMLHTTP");
          }
        return null;
}