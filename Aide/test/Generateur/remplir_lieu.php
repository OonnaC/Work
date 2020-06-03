<?php

    include "connectAD.php";

    //les lieux sont dans le fichier nom.txt
    $nomfichier = 'lieu-etape.txt';
    $tablolieu = file($nomfichier);
    
    
    $id=1;
    
    for($i=0;$i<sizeof($tablolieu);$i++){
    
    $idc=(string)$id;
    
    
    if ( strstr($tablolieu[$i],"Brest")  ){
        
    $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune where vilnom = 'Brest') ,'".$tablolieu[$i]."')";
    echo "SQL : ".$sql."<br>";
    $result = executeSQL($sql)
    or die ("Requete invalide");
    
    $id++;
    if ($result){
        echo "Table modifiee";
    }
    }
    
    if ( strstr($tablolieu[$i],"Guipavas")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune 
        where vilnom = 'Guipavas') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Gouesnou")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Gouesnou') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }

    if ( strstr($tablolieu[$i],"Lesneven")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Lesneven') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Plouzane")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Plouzane') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Quimper")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Quimper') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Lannion")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Lannion') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Guingamp")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Guingamp') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Morlaix")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Morlaix') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Saint-Brieuc")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Saint-Brieuc') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }
    
    if ( strstr($tablolieu[$i],"Vannes")  ){
        
        $sql = "Insert into lieu(LIEUID, VILID, LIEUNOM) Values ('".$idc."', (select vilid from commune
        where vilnom = 'Vannes') ,'".$tablolieu[$i]."')";
        echo "SQL : ".$sql."<br>";
        $result = executeSQL($sql)
        or die ("Requete invalide");
        
        $id++;
        if ($result){
            echo "Table modifiee";
        }
    }

    }   

?>