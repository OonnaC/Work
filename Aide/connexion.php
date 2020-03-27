<!DOCTYPE HTML>
<html>
    <head>
        <title>Projet MESGUEN</title>
        <link rel="stylesheet" type="text/css" href="css/mesguen.css"/>
        
    </head>
    <body>
    
  <header><img src="image/Mesguen.jpg"></header>
        
           <section1></section1>
            <section2></section2>
            
        <aside>
        <div class ="formulaire">
            <fieldset>
                <legend>Connexion</legend>
                <form action="admin.php" method="post">
                    <p>Identifiant : <input type="text" name="pseudo" /></p> <br/>
                    <p>Mot de passe : <input type="password" name="mdp" /></p> <br/>
                    <p><input type="submit" value="Connexion"></p> <br/>
                    
                    <?php
                    if(isset($_GET ['message'])){
                        echo $_GET['message'];
                    }
                    else {
                        echo "&nbsp;";
                    }
                    ?>
                    
                </form>
           </fieldset>
           </div>
 		 </aside>
        
        <footer> </footer>
       
    </body>
</html>
