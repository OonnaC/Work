<?php
    include 'connectAD.php';

    $sql="SELECT * FROM user;";
    
    afficheRequete($sql);
    
   /* $results = tableSQL($sql);
    
   foreach ($results as $ligne) {
        //on extrait chaque valeur de la ligne courante
        $login = $ligne[1];
        $password = $ligne[2];
        $email = $ligne[3];
        echo "<tr>
                <td>".$login."</td>
                <td>".$password."</td>
                <td>".$email."</td>
              </tr>";
        //echo $login." ".$password."<br />";
    }*/
?>