<!DOCTYPE HTML>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" type="text/css" href="css/mesguen.css"/>
    </head>
    <body>
    
	<?php
    if (isset($_POST['mdp']) AND $_POST['mdp'] ==  "phicorp29")
    {
    ?>
    
        <header><img src="image/Mesguen.jpg"></header>
        
            <section1></section1>
            
            <section2></section2>
            
        <aside>
        	<a class="buttontop" href="page/AC11.php">Liste tourn&eacutees</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	<a class="buttontop" href="page/AC12.php">Ajouter</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        	
    	<div class='caroussel_diapo'>
            <input id="play" type="checkbox">
            <label for="play">Bienvenue</label>
        <div class="contenu_carou">
        <div class="caroussel">
            <img src="image/1.jpg" alt>
            <img src="image/2.jpg" alt>
            <img src="image/3.jpg" alt>
            <img src="image/4.jpg" alt>
            <img src="image/1.jpg" alt>
            <img src="image/2.jpg" alt>
            <img src="image/3.jpg" alt>
            <img src="image/4.jpg" alt>
        </div>
        </div>
        </div>
        </aside>
      	
        <footer>
       		<a class="exit" href="index.php">Retour</a>
        </footer>
        
    <?php
    }
    else print "<meta http-equiv='refresh' content='0;url=connexion.php?message=<font color=red> Mot de passe incorrect </font>'>";
    {
    }
    ?>
    
    </body>
</html>