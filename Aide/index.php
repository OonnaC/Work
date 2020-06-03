<!DOCTYPE HTML>
<html>
    <head >
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
                <form action="page/AC11.php" method="post">
                    <p>Identifiant : </p>
                    <input type="text" name="pseudo" /> <br/><br/>
                    <p>Mot de passe : </p>
                    <input type="password" name="mdp" /> <br/><br/>
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
        
        <footer>
            <br />
            <p>&copy; Mesguen 2019. All rights reserved.</p>
    	</footer>
       
    </body>
</html>
