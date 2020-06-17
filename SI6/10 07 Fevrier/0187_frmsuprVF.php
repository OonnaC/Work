<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                      
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Supprimer une information V3</title>
</head>

<body>

	<form id="formulaire" action="0188_supprimeVF.php" method="get">

		<fieldset>
		    <legend>SUPPRESSION D'UNE INFORMATION: </legend>
			<label for="numero" >Information : </label>
			
			<!-- Recuperation des informations -->
			<?php
				include 'connectAD.php';	
				$sql = "SELECT * FROM test"; 
				$cpt = compteSQL($sql);
				$results = tableSQL($sql);
			?>
			
			<!-- Creation de la liste deroulante -->
			<select size="1" 
			        name="numero" 
			        id="numero"
			        <?php 
                 		if ($cpt==0) 
                   			echo "disabled=\"disabled\""; 
                 	?>	     									>
                 	
				<!-- Remplissage le la liste deroulante -->
				<?php 
					if ($cpt>0) {						
						foreach ($results as $ligne) {
							//on extrait chaque valeur de la ligne courante
							$numero = $ligne[0];
							$info = $ligne[1];
							//on affiche la ligne courante dans le select
							echo "<option value=$numero>$info</option>";
						}											
					} else {
						echo "<option>Aucune information...</option>";
					}
				?>
			</select>	
		   
            <!-- Affichage du message de retour -->
            <?php		   
            
    			if (isset($_GET['message']))
    				echo $_GET['message'];
    			else
    				echo "&nbsp;";
    		?>
    		    		
		</fieldset>
        <p>
        
        <!-- Creation dynamique du bouton ENVOYER -->
        <input id="envoyer"  
        	   name="envoyer"  
        	   type="submit"  
        	   value="Supprimer" 
               title=" " 
               onclick="if(!confirm('Voulez-vous Supprimer')) return false;"
               <?php 
              		if ($cpt==0) 
                   		echo "disabled=\"disabled\""; 
               ?>	              	               
        />		
 
	    </p>
	</form>

</body>

</html>