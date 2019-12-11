<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Gestion des utilisateurs en ajax</title>
	<link href="css/default.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/mesfonctions.js"></script>	
</head>

<body>
	<form method="get" >
	<fieldset>
        <legend>Ajouter un utilisateur : </legend>
		<label for="login">Login * : </label>
		<input id="login" name="login" type="text"  size="10" maxlength="8"/>     	
		&nbsp;&nbsp;&nbsp;
		<label for="password">Password * : </label>
		<input id="password" name="password" type="password"  size="10" maxlength="8"/>     	
		<br /> <br />
		<label for="email">Email * : </label>
		<input id="email" name="email" type="email"  size="42" maxlength="40"/>
		<br /> <br />
		<label for="fonction">Fonction * :</label>
			<?php
		
		include'php/connectAD.php';
		
		$sql = "SELECT * FROM fonction;";
		$cpt = compteSQL($sql);
		$results = tableSQL($sql);
		
		?>
		<select class="gauche" size="1" 
			        name="fonction" 
			        id="fonction"
			        <?php 
                 		if ($cpt==0) 
                   			echo "disabled=\"disabled\""; 
                 	?>	     									>
                 	
				<!-- Remplissage le la liste deroulante -->
				<?php 
					if ($cpt>0) {						
						foreach ($results as $ligne) {
							//on extrait chaque valeur de la ligne courante
							$ID = $ligne[0];
							$NOM = $ligne[1];
							//on affiche la ligne courante dans le select
							echo "<option value=$ID>$NOM</option>";
						}											
					} else {
						echo "<option>Aucune information...</option>";
					}
				?>
			</select>
		<br />    
		<div id="buttonadd">	
		    <img src="images/blueadd.png" title="Ajouter un utilisateur" alt="Ajout" onclick=" document.getElementById('messages').innerHTML='';ajaxx('php/insertuser.php?&amp;login='+(document.getElementById('login').value)+'&amp;email='+(document.getElementById('email').value)+'&amp;password='+(document.getElementById('password').value),'messages');" />				    																		     
		</div>
	</fieldset>

	<fieldset>
		<legend>Messages : </legend>
		<div id="messages">
			<br /><br />
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Listes des utilisateurs : </legend>
		<div id="listeutilisateurs">
			
		</div>
		
		<div id="buttonrefresh">	
		    <img src="images/refresh.png" title="Rafraichir" alt="Rafraichir" onclick="document.getElementById('messages').innerHTML='';ajaxx('php/listeuser.php','listeutilisateurs');" />			
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Modification d'un utilisateur : </legend>
		<div id="modif">
		</div>
	</fieldset>
	</form>
</body>

</html>