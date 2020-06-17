<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Supprimer une information V1</title>
</head>

<body>

	<form id="formulaire" action="0184_supprimeV1.php" method="get">

		<fieldset>
		    <legend>SUPPRESSION D'UNE INFORMATION: </legend>
			<label for="numero" >Information : </label>

			<select size="1" name="numero" id="numero">
			<?php
				include 'connectAD.php';
				$sql="SELECT * from test";
				$results = tableSQL($sql);
				foreach ($results as $row) {
					echo "<option value=$row[0]>$row[1]</option>";
				}
			?>
			</select>	
		   
            <?php
    				if (isset($_GET['message']))
    					echo $_GET['message'];
    				else
    					echo "&nbsp;";
    		?>    		
		</fieldset>
        <p>
	    	<input id="envoyer" name="envoyer" type="submit" value="Supprimer" title="" />
	    </p>

	</form>

</body>

</html>