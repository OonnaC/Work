<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inscription - Page d'inscription</title>
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
                <li class="nav-item">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white">Accueil</a>
                </li>
                <li class="nav-item active">
                  <a href="inscription.php" class="nav-link tm-nav-link tm-text-white active">Inscription</a>
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
        <form action="index.php" method="POST" class="form-inline tm-search-form">
          <div class="text-uppercase tm-new-release">New Release</div>
          <div class="form-group tm-search-box">
            <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Type your keyword ...">
            <input type="submit" value="Search" class="form-control tm-search-submit">
          </div>
          <div class="form-group tm-advanced-box">
            <a href="#" class="tm-text-white">Go Advanced ...</a>
          </div>
        </form>
      </div>

      <div class="row tm-mt-big tm-about-row tm-mb-medium">
        <div class="col-xl-12 col-lg-12 col-md-12 col-xs-6 tm-contact-col">
          <div class="tm-contact-left tm-bg-pink-light-2 tm-text-white text-right p-md-5 p-4">
            <!-- <i class="fas fa-3x fa-id-badge mb-4"></i>-->
            <i class="fas tm-fa-big fa-id-badge tm-fa-mb-big"></i>
            <h2 class="tm-media-2-header">Inscription</h2>
          </div>
          <div class="tm-bg-gray tm-contact-middle">
            <form action="action.php" method="post" >
            	<div class="form-group mb-4">
                	<input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Pseudo" required/>
              	</div>
              	<div class="form-group mb-4">
                	<input type="password" id="pwd" name="pwd" class="form-control" placeholder="Mot de passe" required/>
              	</div>
              	<div class="form-group mb-4">
                	<input type="password" id="pwd_repeat" name="pwd_repeat" class="form-control" placeholder="Confirmer le mot de passe" required/>
              	</div>
              	<!--<div class="form-group mb-4">
                	<input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" required/>
              	</div>
              	<div class="form-group mb-4">
                	<input type="text" id="prenom" name="prenom" class="form-control" placeholder="Pr&eacute;nom" required/>
              	</div>
              	<div class="form-group mb-4">
                	<input type="text" id="email" name="pseudo" class="form-control" placeholder="Email" required/>
              	</div>-->
              	<div class="form-group mb-0">
               		<button type="submit" class="btn btn-secondary">Envoyer</button>
              	</div>
            </form>
            <br/>
            <?php 
                
                include 'connect.php';
            
    			if (isset($_GET['message']))
    				echo $_GET['message'];
    			else
    				echo "&nbsp;";
		    ?>
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
  <script src="js/bootstrap.min.js"></script>         <!-- https://getbootstrap.com/ -->
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
