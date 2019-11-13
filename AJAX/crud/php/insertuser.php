<?php

    include "connectAD.php";
    
    $login = !empty($_GET['login']);
    $password = !empty($_GET['password']);
    $email = !empty($_GET['email']);

    if ($login && $password && $email){
    
    $sql = "INSERT INTO user (email,login,password) VALUES (".$email.",".$login.",".$password.");";
    $result = executeSQL($sql);
    echo '(PHP) OK...';
    
    }
    
?>