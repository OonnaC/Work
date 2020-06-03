<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="fr" />
		<title>MESGUEN - AC13</title>
		<link rel="stylesheet" href="../css/tournees.css" />
	</head>
	<header><img src="../image/Mesguen.jpg"></header>
<section1></section1>
<section2></section2>
<aside>
	<body>
		<form action="AC13traitementA.php" method="GET">
			<label for="Lieu" >Lieu</label>
			<select size="1" name="lieu" id="lieu">
				<option value="NULL">Selectionnez un lieu</option>
				<?php
					include 'connectAD.php';
					
					$TRNNUM = $_GET['tournee'];
					
					$sql = "SELECT LIEUID, LIEUNOM
							FROM lieu";
					
					$result = executeSQL($sql);
					
					$cpt = mysqli_num_rows($result);
					
					if ($cpt>0) {	
						while ($row = mysqli_fetch_array($result, )) {		
							echo "<option value=$row[0]>$row[1]</option>";
						}					
					} else {
						echo "<select size=\"1\" name=\"numero\" id=\"numero\" disabled=\"disabled\" >";	
						echo "<option>Aucune information...</option>";
					}		
	    		?>   
	    	</select>
			
			<br/>
			<br/>
			
			<label>Rendez-vous entre :</label>
			<input type="date" value="<?php $date = date("Y/m/d H:i:00"); echo "$date" ?>" name="RDVDebut" id="RDVDebut"/>
			
			<label>Et :</label>
			<input type="date" value="<?php $date = date("Y/m/d H:i:00"); echo "$date" ?>" name="RDVFin" id="RDVFin"/>
			
			<br/>
			<br/>
			
			<label>Pris en charge le :</label>
			<input type="date" value="8/7/15/ 8:15" name="RDVPrise" id="RDVPrise"/>
			
			<br/>
			<br/>
			
			<label>Commmentaire :</label>
			<textarea class="commentaire" name="commentaire" id="commentaire" rows="5" cols="15"></textarea>
			
			<br/>
			<br/>
			
			
			
			<input id="tournee" name="tournee" type="hidden" value="<?php echo "$TRNNUM" ?>" />
              <input id="etape" name="etape" type="hidden" value="<?php echo "$ETPID" ?>"/>
                    <button class="btn btn-light pull-left" id="button" name="valider" type="submit" value="Valider"/> valider</button>
                </form>
            <form class="" action="../admin/index.php?page=AC12_modifier" method="post">
              <input id="tournee" name="tournee" type="hidden" value="<?php echo "$TRNNUM" ?>" />
              <input id="etape" name="etape" type="hidden" value="<?php echo "$ETPID" ?>"/>
              <button class="btn btn-light pull-left" id="cancel2" type="submit" name="retour" value="Annuler" />annuler</button>

	</body>
</aside>
<footer>

</footer>
</body>

</html>