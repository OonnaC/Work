<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>S&eacute;lection</title>
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
      	<form action="affichesel.php" method="get">
          <table border="1">
              	<?php
              	
              	 include 'connect.php';
              	 $requete="SELECT SEL_INTITULE, SEL_TEXTE_INTRO, SEL_DATE_AJOUT, CPT_PSEUDO, SEL_NUM
                          FROM T_SELECTION_SEL;";
              	 
                 //Boucle de récupération des sélections
              	 $result1 = $mysqli->query($requete);
              	 if ($result1 == false) //Si il y a une erreur lors de l’exécution de la requête
              	 { // La requête a echoué
              	     echo "Error: La requête a echoué \n";
              	     echo "Errno: " . $mysqli->errno . "\n";
              	     echo "Error: " . $mysqli->error . "\n";
              	     exit();
              	 }
              	 else
              	 {
              	     /*echo "<br />";
              	     echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
              	     echo "<br />";*/
              	     
              	     while ($sel = $result1->fetch_row())
              	     {
              	         //Affichage des sélestions sous la forme d'un tableau
              	         echo ('<tr>');
              	         echo ('<td>'.$sel[0].'</td>');
              	         echo ('<td>'.$sel[1].'</td>');
              	         echo ('<td>'.$sel[2].'</td>');
              	         echo ('<td>'.$sel[3].'</td>');
              	         
              	         //Recherche du numéro du 1er élément pour chaque sélection
              	         $req ="SELECT ELE_NUM
                                FROM TJ_RELIE_REL
                                WHERE SEL_NUM =".$sel[4]."
                                AND ELE_NUM>0
                                ORDER BY ELE_NUM ASC
                                LIMIT 1;";
              	         $result2 = $mysqli->query($req);
              	         if ($result2 == false) //Si il y a une erreur lors de l’exécution de la requête
              	         { // La requête a echoué
              	             echo "Error: La requête a echoué \n";
              	             echo "Errno: " . $mysqli->errno . "\n";
              	             echo "Error: " . $mysqli->error . "\n";
              	             exit();
              	         }
              	         else //Si la requête s’est bien exécutée, affichage dans l'URL des id de la sélection et de l'élément
              	         {
              	             if($ele = $result2->fetch_assoc()){
              	                 echo ('<td><a href="affichesel.php?sel_id='.$sel[4].'&ele_id='.$ele['ELE_NUM'].'">Voir</a></td>');
              	             }else{
              	                 //Si pas d'élément trouvé, remplacement par un zéro
              	                 echo ('<td><a href="affichesel.php?sel_id='.$sel[4].'&ele_id=0 ">Voir</a></td>');
              	             }
                  	         
              	         }
                  	     echo ('</tr>');
              	         
              	     }
              	 }
              	 ?>
          </table>
      	</form>
      </div>


    </div> <!-- .container -->
    <footer class="row">
		<div class="container-fluid bg-secondary">
			<div class="container">
				<div class="row text-white">
            <!-- <div class="col-xl-12">-->
                	<?php 

                	//Préparation de la requête récupérant toutes les informations de la structure
                	$requete="SELECT PRE_NOM_STRUCTURE, PRE_ADRESSE, PRE_EMAIL, PRE_TEL,
                              DATE_FORMAT(`PRE_HORAIRE`, \"%H:%i\") AS PRE_HORAIRE, PRE_TEXTE_BIENVENUE
                              FROM T_PRESENTATION_PRE
                              LIMIT 1;";
                	//Affichage de la requête préparée
                	//echo ($requete);
                	
                	$result2 = $mysqli->query($requete);
                	if ($result2 == false) //Erreur lors de l’exécution de la requête
                	{ // La requête a echoué
                	    echo "Error: La requête a echoué \n";
                	    echo "Errno: " . $mysqli->errno . "\n";
                	    echo "Error: " . $mysqli->error . "\n";
                	    exit();
                	}
                	else //La requête s’est bien exécutée
                	{
                	    //echo "<br />";
                	    //echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
                	    //echo "<br />";
                	    while ($row = $result2->fetch_assoc())
                	    {
                	        //Affichage des informations dans des colonnes sous bootstrap
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