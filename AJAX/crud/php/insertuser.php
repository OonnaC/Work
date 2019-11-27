<?php

    include "connectAD.php";
    
    $login = !empty($_GET['login']);
    $password = !empty($_GET['password']);
    $email = !empty($_GET['email']);

    if ($login && $password && $email){
    
    $sql = "INSERT INTO user (email,login,password) VALUES (".$email.",".$login.",".$password.");";
    $result = executeSQL($sql);
    
    if ($result)
        echo "<meta http-equiv='refresh' content='0;url=monindex.php?message=<font color=green> Ajout realise... </font>'>";
        else
            echo "<meta http-equiv='refresh' content='0;url=monindex.php?message=<font color=red> Probleme insertion le login existe deja... </font>'>";
    } 


?>