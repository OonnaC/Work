<?php

    include 'connectAD.php';

    $sql="SELECT * FROM user;";
    
    //afficheRequete($sql);
    
    $results = tableSQL($sql);
    $nbchamps = nombreChamp($sql);
    echo"<table>
    		<thead>
        		<tr>
            		<th>Login</th>
                  	<th>Password</th>
                  	<!--<th>Fonction</th>-->
                  	<th>Email</th>
                  	<th><a href=\"http://slam-4.000webhostapp.com/\">
                        <img src=\"images/edittitre16.png\" alt=\"\" border=3 height=25 width=25 /></a></th>
                  	<th><img src=\"images/deletetitre16.png\" alt=\"\" border=3 height=25 width=25></th>
        		</tr>
    		</thead>
		    <tbody>";
                
foreach ($results as $ligne) {
         echo "<tr>";
        //on extrait chaque valeur de la ligne courante
       //for ($i=1; $i<$nbchamps; $i++) {
            echo "<td>".$ligne[1]."</td>
            <td>".$ligne[2]."</td>
            <td>".$ligne[3]."</td>
            <td><a href=\"../php/modifeuser.php/\"><img src=\"images/edit.png\" alt=\"\" border=3 height=25 width=25>
                </a></td>
            <td><a href=\"../php/deleteuser.php\"><img src=\"images/delete.png\" alt=\"\" border=3 height=25 width=25>
                </img></a></td>";
        //}
        echo "</tr>";
}
        echo "</tbody>
        </table>";
