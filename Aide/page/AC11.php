<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-language" content="fr">
		<link rel="stylesheet" type="text/css" href="../css/tournees.css" />
		<title>MESGUEN - AC11</title>
	</head>
	<body>
	<header><img src="../image/Mesguen.jpg"></header>
    <section1></section1>
    <section2></section2>
    <aside>
     <h1>Liste des tournées</h1>
		<!-- création du tableau des tourée  --> 
		<div class="tableau">
			<table>
				<thead>
					<!-- titre des colones --> 	
					<tr class="en-tete">
					    <th>Tourn&eacute;e</th>
					    <th>Date</th>
						<th>Chauffeur</th>
						<th>V&eacute;hicule</th>
						<th>D&eacute;part</th>
						<th>Arriv&eacute;e</th>
						<th>Supprimer</th>
						<th>Modifier</th>			   
					</tr>	
				</thead>

				<?php
					//insertion de la connection a la base de données 
					include 'connectAD.php';
					
					//selection les infos pour la tournée 
					$sql = "SELECT TRNNUM,TRNDTE,CHFNOM,VEHIMMAT 
							FROM tournee,chauffeur 
							WHERE tournee.CHFID=chauffeur.CHFID;";
					
					$result = executeSQL($sql);
					
					if($result) {	
						while ($row = mysqli_fetch_array($result)) {
				?>
					
				<!-- creation des ligne des tournée --> 
					<tr class="ligne-interne">
						<td><?php echo $row['TRNNUM']; ?></td>
						<td><?php echo $row['TRNDTE']; ?></td>
						<td><?php echo $row['CHFNOM']; ?></td>
						<td><?php echo $row['VEHIMMAT']; ?></td>
						<td> 
							<?php
								//ajout de l'info "depart"
								$TRNNUM = $row['TRNNUM'];
								
								$depart_sql =  "SELECT LIEUNOM 
												FROM lieu,etape
												WHERE etape.LIEUID = lieu.LIEUID
												AND etape.TRNNUM = ".$TRNNUM."
												ORDER BY ETPID ASC;";
								
								$depart = executeSQL($depart_sql); 
								$depart = mysqli_fetch_array($depart,);
								
								echo $depart[0]; 
							?>
						</td>
							
						<td> 
							<?php
							//ajout de l'info "depart"
								$arrivee_sql =  "SELECT LIEUNOM 
												FROM lieu,etape
												WHERE etape.LIEUID = lieu.LIEUID
												AND etape.TRNNUM = ".$TRNNUM."
												ORDER BY ETPID DESC;";
								
								$arrivee = executeSQL($arrivee_sql); 
								$arrivee = mysqli_fetch_array($arrivee,);
								
								echo $arrivee[0]; 
							?>
						</td>
													
						<td> 
							<form id="form_effacer" action="supprimer.php">
								<input id="tournee" name="tournee" type="hidden" value="<?php echo "$TRNNUM" ?>" />
								<input id="effacer" name="effacer" type="image" src="../image/cross.png" onclick = "if(!confirm('Voulez-vous supprimer')) return false;" />
							</form> 
						</td>
						
						<td> 
							<form id="AC12" action="AC12_modifier.php">
								<input id="tournee" name="tournee" type="hidden" value="<?php echo "$TRNNUM" ?>" />
								<input id="modifier" name="modifier" type="image" src="../image/modif02.png" />
							</form> 
						</td>
					<tr />	
				<?php	
						}
					}	
				?>
			</table>
		</div>
		
		<br/>
		<input id="back" type="button" name="retour" value="Retour" onclick="location.href='../Index.php'" />
		<?php 
		
			if (isset($_GET['message']))
				echo $_GET['message'];
				else
					echo "&nbsp;";
				
		?>
		</aside>
        <footer>
        
        </footer>
    </body>
</html>