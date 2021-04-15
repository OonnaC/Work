<?php
    $erreur = false;
    $erreur_msg = "";
    $success_msg = "";
    $pseudo = null;
    $pwd = null;
    $pwd2 = null;
    $email = null;
    $nom = null;
    $prenom = null;
    
    if (!empty($_POST['pseudo'])){ //V�rification que le champ du pseudo ne soit pas vide
        $pseudo = htmlspecialchars((addslashes($_POST['pseudo'])));
        //On v�rifie que le pseudo ne contient pas d'espace
        if ((strpos($pseudo," "))){ 
            header("refresh:7;url=inscription.php");
            $erreur = true;
            echo "Les mots compos�s ne sont pas autoris�s. Veuillez r�essayer.";
            /*echo "<meta http-equiv='refresh' content='0;url=inscription.php?message=<font color=red> 
                  Les mots compos&eacute;s ne sont pas autoris&eacute;s. Veuillez r&eacute;essayer.</font>'>";*/
        }
    }else{
        //Si il a une erreur, on rafra�chit la page et un message d'erreur appara�t
        header("refresh:7;url=inscription.php");
        $erreur = true;
        echo "<meta http-equiv='refresh' content='0;url=inscription.php?message=<font color=red> 
                Erreur dans le pseudo. Veuillez r&eacute;essayer.</font>'>";
                    
    }
    if (!empty($_POST['pwd'])){ //V�rification que le champ du mot de passe ne soit pas vide
        $pwd = htmlspecialchars((addslashes($_POST['pwd'])));
        $pwd2 = htmlspecialchars((addslashes($_POST['pwd'])));
        //Comparaison entre la saisie du mot de passe et la confirmation du mot de passe s'ils correspondent
        if (strcmp($pwd,$pwd2) == !false){
            header("refresh:7;url=inscription.php");
            $erreur = true;
            echo "Erreur de mot de passe. Veuillez r�essayer.<br />";
                            
        }
        //V�rification que le mot de passe et la deusi�me saisie du mot de passe ne contienent pas d'espaces
        if ((strpos($pwd," ") || strpos($pwd2," ")) || (strpos($pwd," ") && strpos($pwd2," "))){ 
            //Si il a une erreur, on rafra�chit la page et un message d'erreur appara�t
            header("refresh:7;url=inscription.php");
            echo "<meta http-equiv='refresh' content='0;url=inscription.php?message=<font color=red>
                    Les mots compos&eacute;s ne sont pas autoris&eacute;s. Veuillez r&eacute;essayer.</font>'>";
         }
     }else{
         //Si il a une erreur, on rafra�chit la page et un message d'erreur appara�t
         header("refresh:7;url=inscription.php");
         echo "<meta http-equiv='refresh' content='0;url=inscription.php?message=<font color=red>
                 Erreur de saisie. Veuillez r&eacute;essayer.</font>'>";
         $erreur = true;
     }
     
     
     if(!$erreur){
         
         //Connexion � la base de donn�es
         include 'connect.php';
         //Pr�paration de la requ�te pour l'insertion d'un compte dans la base de donn�es
         $sql = "SELECT * FROM T_COMPTE_CPT WHERE CPT_PSEUDO = '".$pseudo."' AND CPT_MOT_DE_PASSE = MD5('".$pwd."');";
         $requete = $mysqli->query($sql);
         if ($requete == false){

             //Insertion du compte utilisateur
             $sql1 = "INSERT INTO T_COMPTE_CPT (CPT_PSEUDO, CPT_MOT_DE_PASSE)
                     VALUES('".$pseudo."',MD5('".$pwd."'));";
             $requete2 = $mysqli->query($sql1);
             
             //Erreur lors de l�ex�cution de la requ�te
             if ($requete2 == false){ // La requ�te a echou�
                 echo "Error: La requ�te a echou� \n";
                 echo "Errno: " . $mysqli->errno . "\n";
                 echo "Error: " . $mysqli->error . "\n";
                 exit();
             }else{
                 echo "Insertion du compte r&eacute;ussie!";
             }
             
             
         }else{ 
             /*echo $pseudo.",".$pwd;
             echo $erreur;
             echo "Erreur pour l'insertion. Veuillez r&eacute;essayer.";*/
         }

         
      }
         
         
        
