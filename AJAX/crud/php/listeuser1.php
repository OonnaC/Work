<html>
    <?php
    
    include 'connectAD.php';
    
    $sql="SELECT * FROM user;";
        
    //afficheRequete($sql);
        
    $results = tableSQL($sql);
    $nbchamps = nombreChamp($sql);
        
    ?>
    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Password</th>
                <!--<th>Fonction</th>-->
                <th>Email</th>
                <th><a href="http://slam-4.000webhostapp.com"><img src="images/edittitre16.png" alt="" border=3 height=25 width=25></img></a></th>
                <th><img src="images/deletetitre16.png" alt="" border=3 height=25 width=25></th>
            </tr>
        </thead>
        <tbody>
        <?php             
        foreach ($results as $ligne) {
        ?>
            <tr>
                <!-- on extrait chaque valeur de la ligne courante-->
                <td><?php $ligne[1]?></td>
                <td><?php $ligne[2]?></td>
                <td><?php $ligne[3]?></td>
                <td><a href="../php/modifeuser.php"><img src="images/edit.png" alt="" border=3 height=25 width=25></a></td>
                <td><a href="../php/deleteuser.php"><img src="images/delete.png" alt="" border=3 height=25 width=25></img></a></td>      
            </tr>
        <?php 
        
        }
        
        ?>
        </tbody>
    </table>
</html>