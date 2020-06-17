<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                      
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Supprimer une information V2</title>
</head>

<body>

	<form id="formulaire" action="0186_supprimeV2.php" method="get">

		<fieldset>
		    <legend>SUPPRESSION D'UNE INFORMATION: </legend>
			<label for="numero" >Information : </label>
			<?php
				include 'connectAD.php';	
				$sql = "SELECT * FROM test"; 			
				$cpt=compteSQL($sql);
				
				if ($cpt>0) {
					$results = tableSQL($sql);
					echo "<select size=\"1\" name=\"numero\" id=\"numero\">";	
					foreach ($results as $row) {
						echo "<option value=$row[0]>$row[1]</option>";
					}					
				} else {
					echo "<select size=\"1\" name=\"numero\" id=\"numero\" disabled=\"disabled\" >";	
					echo "<option>Aucune information...</option>";
				}
			
				echo "</select>";			   
            
    			if (isset($_GET['message']))
    				echo $_GET['message'];
    			else
    				echo "&nbsp;";
    		?>    		
		</fieldset>
        <p>
        	<?php
        		if ($cpt>0)
        			echo "<input id=\"envoyer\" name=\"envoyer\" type=\"submit\" value=\"Supprimer\" title=\"\" />";
        		else
        			echo "<input id=\"envoyer\" name=\"envoyer\" type=\"submit\" value=\"Supprimer\" title=\"\" disabled=\"disabled\" />";
        	?>
	    </p>
	</form>

</body>

</html>