<html>
    <head>
        <title>Les news</title>
    </head>
    <body>
    <h1>Les news</h1>
    <div id="news">
        <?php
        /*$news_req = $connect->query("SELECT * FROM news WHERE id='$news_id'");
        $news = mysqli_fetch_array($news_req);*/
        ?>
    <h2><?php /*echo $news['titre']*/ ?> postee le <?php /*echo $news['date'] */?></h2>
    <p><?php /*echo $news['texte_nouvelle'] */?> </p>
        <?php
        /*$comment_req = $connect->query("SELECT * FROM commentaires WHERE news_id='$news_id'");
        $nbre_comment = mysqli_num_rows($comment_req);;*/
        ?>
    <h3><?php /*echo $nbre_comment */?> commentaires relatifs a cette nouvelle</h3>
        <?php /*while ($comment = mysqli_fetch_array($comment_req)) { */?>
            <h3><?php /*echo $comment['auteur'] */ ?> a ecrit le <?php /*echo $comment['date'] */?></h3>
            <p><?php /*echo $comment['texte'] */ ?></p>
        <?php /* } */?>
    <form method="POST" action="<?php /*echo $_SERVER['SCRIPT_NAME']*/ ?>" name="ajoutcomment">
        <input type="hidden" name="news_id" value="<?php /*echo /*$news_id */ ?>">
        <input type="text" name="auteur" value="Votre nom"><br />
        <textarea name="texte" rows="5" cols="10">Saisissez votre commentaire</textarea><br />
        <input type="submit" name="submit" value="Envoyer">
    </form>
    </div>
    </body>
</html>