<?php

    include "connectAD.php";
    
    $login = ($_GET['login']);
    $password = ($_GET['password']);
    $email = string($_GET['email']);

    //echo $login." ".$password." ".$email;    
    if (!empty($login) && !empty($password) && !empty($email)){
    
    $sql = "INSERT INTO user (email,login,password) VALUES (".$email.",".$login.",".$password.");";
    $result = executeSQL($sql);
    
    if ($result)
        echo "<meta http-equiv='refresh' content='0;url=monindex.php?message=<font color=green> Ajout realise... </font>'>";
        else
            echo "<meta http-equiv='refresh' content='0;url=monindex.php?message=<font color=red> Probleme insertion le ".$login." existe deja... </font>'>";
    }else
        echo "<meta http-equiv='refresh' content='0;url=monindex.php?message=<font color=red> Renseigner les tous champs. </font>'>";
        


?>