<?php
    include 'connectAD.php';

    //on recupere les variables issue du formulaire
    $login=$_GET['login'];
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];

    if (!empty($login) && !empty($email) && !empty($mdp)) {

        $sql = "INSERT INTO `user` (`numero`, `login`, `password`, `email`) VALUES (NULL, '".$login."', '".$mdp."', '".$email."')";
		
		//echo "<br />SQL : $sql";
       $result = executeSQL_GE($sql);
       
        if ($result)
            echo "<meta http-equiv='refresh' content='0;url=frmAfficheUser.php?message=<font color=green> Ajout realise... </font>'>";
        else
            echo "<meta http-equiv='refresh' content='0;url=frmAfficheUser.php?message=<font color=red> Probleme insertion le login $login existe deja... </font>'>";
   } else
        echo "<meta http-equiv='refresh' content='0;url=frmAfficheUser.php?message=<font color=red> Renseigner les champs </font>'>";

?>


