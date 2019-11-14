<?php
    
    //connexion bdd
    function getBDNewsConnect(){
        $connect = mysqli_connect('localhost', 'root', '', 'bdnews', '3307' );
        
        return $connect;    
        
    }
    //
    function BDNewsFormat(){
        
        $connect = getBDNewsConnect();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $news_id = $_POST['news_id'];
            $res = $connect->query("INSERT INTO commentaires SET news_id='$news_id',
                                              auteur='".mysql_escape_string($_POST['auteur'])."',
                                              texte='".mysql_escape_string($_POST['texte'])."',
                                              date=NOW()"
                );
            header("location: ".$_SERVER['SCRIPT_NAME']."?news_id=$news_id");
            exit;
        } else {
            $news_id = $_GET['news_id'];
            
        }
        
        return $news_id;
    }

    //selection infos en fonction id
    function IdNews(){
        
        $connect = getBDNewsConnect();
        $news_req = $connect->query("SELECT * FROM news WHERE id='$news_id'");
        $news = mysqli_fetch_array($news_req);
        
        return $news;
    
    }
    
    //selection infos sur table commentaire + tableau
    function CommentaireInfos(){
        
        $connect = getBDNewsConnect();
        $comment_req = $connect->query("SELECT * FROM commentaires WHERE news_id='$news_id'");
        $nbre_comment = mysqli_num_rows($comment_req);
    }
    
   // while ($comment = mysqli_fetch_array($comment_req)) 

?>