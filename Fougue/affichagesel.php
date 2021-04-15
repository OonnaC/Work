<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Affichage des s&eacute;lection</title>
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
                  <a href="inscription.php" class="nav-link tm-nav-link tm-text-white">Inscription</a>
                </li>
                <li class="nav-item">
                  <a href="selection.php" class="nav-link tm-nav-link tm-text-white active">S&eacute;lection</a>
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

      <!--<div class="row tm-about-row tm-mt-big tm-mb-medium">-->
      <div class="row tm-albums-container grid">
      	<table border="1">
      	<?php
      	 
      	 include 'connect.php';
      	 $eid = $_GET['ele_id'];
      	 $sid = $_GET['sel_id'];
      	 
      	 $requete="SELECT SEL_INTITULE, SEL_TEXTE_INTRO, SEL_DATE_AJOUT, CPT_PSEUDO
                  FROM T_SELECTION_SEL;";
      	 //Affichage de la requ�te pr�par�e
      	 //echo ($requete);
      	 //afficheRequete($requete);
      	 //tableSQL($requete);
      	 $result1 = $mysqli->query($requete);
      	 if ($result1 == false) //Erreur lors de l�ex�cution de la requ�te
      	 { // La requ�te a echou�
      	     echo "Error: La requ�te a echou� \n";
      	     echo "Errno: " . $mysqli->errno . "\n";
      	     echo "Error: " . $mysqli->error . "\n";
      	     exit();
      	 }
      	 else //La requ�te s�est bien ex�cut�e (<=> couleur verte dans phpmyadmin)
      	 {
      	     echo "<br />";
      	     //echo($result1->num_rows); //Donne le bon nombre de lignes r�cup�r�es
      	     echo "<br />";
      	     
      	     while ($row = $result1->fetch_row())
      	     {
      	         //echo ($row[0].'<br/>'.$row[1].'<br/>'.$row[2].'<br/>'.$row[3]);
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
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 tm-about-col-left">
          <div class="tm-v-center tm-bg-gray h-100 tm-about-text">
            <h2 class="tm-text-brown mb-4 tm-about-h2">Lorem ipsum dolor sit amet</h2>
            <p class="tm-about-description mb-0">Donec eu placerat sapien. Ut volutpat metus ipsum, a porttitor est consectetur quis. Pellentesque sit amet tristique odio, sed vulputate purus. Aliquam mattis suscipit orci, nec vehicula orci gravida sit amet. Morbi vel tortor et mauris sodales pretium.</p>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="tm-about-img"></div>
        </div>
      </div>

      <div class="row tm-about-row tm-mb-medium">
        <div class="tm-tab-links-container">

          <!--<ul class="nav nav-tabs" id="tmTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link tm-bg-gray tm-media-v-center tm-tab-link active" id="home-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">
                <i class="fas fa-2x fa-music pr-4"></i>
                <p class="media-body mb-0 tm-media-link">Proin vitae ligula</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tm-bg-gray tm-media-v-center tm-tab-link" id="profile-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">
                <i class="fab fa-2x fa-accusoft pr-4"></i>
                <p class="media-body mb-0 tm-media-link">Nunc nec luctus</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tm-bg-gray tm-media-v-center tm-tab-link" id="contact-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">
                <i class="fab fa-2x fa-amazon-pay pr-4"></i>
                <p class="media-body mb-0 tm-media-link">Etiam vel ligula</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link tm-bg-gray tm-media-v-center tm-tab-link" id="contact-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact" aria-selected="false">
                <i class="fas fa-2x fa-headphones pr-4"></i>
                <p class="media-body mb-0 tm-media-link">Sed id magna</p>
              </a>
            </li>
          </ul>-->

        </div>

        <div class="tm-tab-content-container">
          <div class="tab-content h-100 tm-bg-gray" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
              <div class="media tm-media-2">
                <i class="fas fa-5x fa-music mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Quisque pharetra tellus eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
              <div class="media tm-media-2">
                <i class="fab fa-5x fa-accusoft mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Nunc nec luctus eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
              <div class="media tm-media-2">
                <i class="fab fa-5x fa-amazon-pay mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Etiam vel ligula eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
              <div class="media tm-media-2">
                <i class="fas fa-5x fa-headphones mb-3 tm-text-pink-dark tm-media-2-icon"></i>
                <div class="media-body tm-media-body-2">
                  <h2 class="mb-4 tm-text-pink-dark tm-media-2-header">Sed id magna eu mi aliquet</h2>
                  <p class="mb-4">Phasellus efficitur, ante et bibendum accumsan, nisi tellus fermentum eros, eget tincidunt enim orci at arcu. Etiam vel ligula non neque pharetra scelerisque mollis ac arcu.</p>
                  <p class="mb-4">In luctus eu turpis sed sodales. Suspendisse nisi ante, dapibus id purus at, tristique ullamcorper dolor. Nullam tempus quam id odio tempus bibendum. Nullam vulputate, justo fermentum interdum fermentum, diam elit iaculis lorem, sed puvina.</p>
                  <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

      <!--<div class="row tm-about-row tm-mb-medium">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EreZNkWzBAw?rel=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>-->

      <!-- Bottom links -->
      <div class="row tm-about-row tm-mb-medium">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
          <h4 class="mb-4 tm-font-300">Latest Albums</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Sed fringilla consectetur</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Mauris porta nisl quis</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Quisque maximus quam nec</a>
          <a href="#" class="tm-text-blue-dark d-block">Class aptent taciti sociosqu ad</a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
          <h4 class="mb-4 tm-font-300">Our Pages</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Nam dapibus imperdiet</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Primis in faucibus orci</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Sed interdum blandit dictum</a>
          <a href="#" class="tm-text-blue-dark d-block">Donec non blandit nisl</a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
          <h4 class="mb-4 tm-font-300">Quick Links</h4>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Nullam scelerisque mauris</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Vivamus tristique enim non orci</a>
          <a href="#" class="tm-text-blue-dark d-block mb-2">Luctus et ultrices posuere</a>
          <a href="#" class="tm-text-blue-dark d-block">Cubilia Curae</a>
        </div>
      </div>
    </div> <!-- .container -->
    <footer class="row">
		<div class="container-fluid bg-secondary">
			<div class="container">
				<div class="row text-white">
            <!-- <div class="col-xl-12">-->
                	<?php 
                	//include 'connectAD.php';
                	//Pr�paration de la requ�te r�cup�rant tous les profils
                	$requete="SELECT PRE_NOM_STRUCTURE, PRE_ADRESSE, PRE_EMAIL, PRE_TEL,
                              DATE_FORMAT(`PRE_HORAIRE`, \"%H:%i\") AS PRE_HORAIRE, PRE_TEXTE_BIENVENUE
                              FROM T_PRESENTATION_PRE
                              LIMIT 1;";
                	//Affichage de la requ�te pr�par�e
                	//echo ($requete);
                	
                	$result2 = $mysqli->query($requete);
                	if ($result2 == false) //Erreur lors de l�ex�cution de la requ�te
                	{ // La requ�te a echou�
                	    echo "Error: La requ�te a echou� \n";
                	    echo "Errno: " . $mysqli->errno . "\n";
                	    echo "Error: " . $mysqli->error . "\n";
                	    exit();
                	}
                	else //La requ�te s�est bien ex�cut�e (<=> couleur verte dans phpmyadmin)
                	{
                	    //echo "<br />";
                	    //echo($result1->num_rows); //Donne le bon nombre de lignes r�cup�r�es
                	    //echo "<br />";
                	    while ($row = $result2->fetch_assoc())
                	    {
                    ?>
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
      	<!-- <div class="col-xl-12 bg-dark text-white">-->
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