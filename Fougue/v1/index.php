<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Fougue</title>
<!--

Template 2101 Insertion

http://www.tooplate.com/view/2101-insertion

-->
  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="css/tooplate-style.css">                                           <!-- Templatemo style -->

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white active">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="inscription.php" class="nav-link tm-nav-link tm-text-white">Inscription</a>
                </li>
                <li class="nav-item">
                  <a href="selection.php" class="nav-link tm-nav-link tm-text-white">S&eacute;lection</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <h1 class="text-uppercase mb-3 tm-site-name">Fougue :</h1>
          <p class="tm-site-description">Regroupement d'artistes</p>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="tm-search-form-container">
        <form action="index.html" method="GET" class="form-inline tm-search-form">
          <div class="form-group tm-search-box">
            <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Mots-cl&eacute;s">
            <input type="submit" value="Rechercher" class="form-control tm-search-submit">
          </div>
        </form>
      </div>

      <div class="row tm-albums-container grid">
      	<table border="1">
        	<tr>
            	<th>Titre</th>
              	<th>Texte</th>
              	<th>Date de publication</th>
              	<th>Pseudo</th>
          	</tr>
      	<?php 
      	
      	include "connect.php";
      	
      	//Préparation de la requête récupérant les informations pour les actualités
      	$requete="SELECT ACT_TITRE, ACT_TEXTE, ACT_DATE_PUBLI, CPT_PSEUDO
                  FROM T_ACTUALITE_ACT;";
      	//Affichage de la requête préparée
      	//echo ($requete);
      	
      	$result1 = $mysqli->query($requete);
      	if ($result1 == false) //Erreur lors de l’exécution de la requête
      	{ // La requête a echoué
      	    echo "Error: La requête a echoué \n";
      	    echo "Errno: " . $mysqli->errno . "\n";
      	    echo "Error: " . $mysqli->error . "\n";
      	    exit();
      	}
      	else //La requête s’est bien exécutée
      	{
      	    echo "<br />";
      	    //echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
      	    echo "<br />";
      	    
      	    while ($row = $result1->fetch_row())
      	    {
      	        //Affichage sous la forme d'un tableau des actualités
      	        echo ('<tr>');
          	    echo ('<td>'.$row[0].'</td>');
          	    echo ('<td>'.$row[1].'</td>');
          	    echo ('<td>'.$row[2].'</td>');
          	    echo ('<td>'.$row[3].'</td>');
          	    echo ('</tr>');
          	        
      	    }
      	}
      	?>	
      		</table>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
         
        </div>
        <div class="col-sm-6 col-12 col-md-6 col-lg-3 col-xl-3 tm-album-col">
          
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="tm-tag-line">
          <h2 class="tm-tag-line-title font-italic">" L'imagination est plus importante que le savoir. "</h2>
          <p class="text-white text-end" style="margin-top: auto;">Albert Einstein.</p>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
    <!-- Footer -->
	<footer class="row">
		<div class="container-fluid bg-secondary">
			<div class="container">
				<div class="row text-white">
                	<?php 
                	
                	//Préparation de la requête récupérant les informations de la structure
                	$requete="SELECT PRE_NOM_STRUCTURE, PRE_ADRESSE, PRE_EMAIL, PRE_TEL,
                              DATE_FORMAT(`PRE_HORAIRE`, \"%H:%i\") AS PRE_HORAIRE, PRE_TEXTE_BIENVENUE
                              FROM T_PRESENTATION_PRE
                              LIMIT 1;";
                	//Affichage de la requête préparée
                	//echo ($requete);
                	
                	$result2 = $mysqli->query($requete);
                	if ($result2 == false) //Si il y a une erreur lors de l’exécution de la requête
                	{ // La requête a echoué
                	    echo "Error: La requête a echoué \n";
                	    echo "Errno: " . $mysqli->errno . "\n";
                	    echo "Error: " . $mysqli->error . "\n";
                	    exit();
                	}
                	else //La requête s’est bien exécutée
                	{
                	    /*echo "<br />";
                	    echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
                	    echo "<br />";*/
                	    while ($row = $result2->fetch_assoc())
                	    {
                    ?>
                    <!-- Affichage des informations dans sous forme de colonne avec bootstrap -->
                    <div class="col-6 col-md-4">
                        <h3 class="monfooter">A propos :</h3>
                    	<p><?php echo($row["PRE_TEXTE_BIENVENUE"])?></p>
                    </div>
                    <div class="col-6 col-md-4">
                    	<h3 class="monfooter">Contact :</h3>
                    	<p><?php echo($row["PRE_ADRESSE"])?></p>
                    	<p><?php echo($row["PRE_EMAIL"])?></p>
                    	<p><?php echo($row["PRE_TEL"])?></p>
                    	
                    </div>
                    <div class="col-6 col-md-4">
                    	<h3 class="monfooter">Horaires :</h3>
                    	<p>A partir de <?php echo($row["PRE_HORAIRE"])?>.</p>
                    	<p>Du lundi au vendredi.</p>
                    	<?php
                    	    }
                    	}
                    	//Ferme la connexion avec la base MariaDB
                    	$mysqli->close();
                    	
                        ?>
                    </div>
            	</div> 
        	</div>
      	</div>
      	<div class="container-fluid bg-dark text-white">
                  <p class="text-center p-4">Copyright &copy; <span class="tm-current-year">2021</span> Oonna CHAPALAIN 
                  
                  - Design:  Tooplate</p>
        </div>
      </footer>
  </div> <!-- .main -->
  

  <!-- load JS -->
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
</body>
</html>