<?php
        /*
        Site de l'auteur : http://prepamp.free.fr
        email : rifly01@gmail.com
        */
          



// On crée une fonction qui va générer des chaines aléatoires,
function caracteresAleatoires($nombreDeCaracteres){
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxyz123456789_"; // On choisit une combinaison ici.
    
    srand((double)microtime()*1000000);
    
    for($i=0; $i<$nombreDeCaracteres; $i++){
        $string .= $chaine[rand()%strlen($chaine)]; // On choisit $nombreDeCaracteres caractères au hasard.
    }
    
    // On obtient cette chaine complètement aléatoire !
    return $string;
    
}

        function mailAleatoire(){
         
         
        // On choisit le nom d'utilisateur de façon aléatorie,
            $tailleDeLaChaineAGenerer = caracteresAleatoires(10); // Vous pouvez changer la taille de la chaine !
            $nomUtilisateur = $tailleDeLaChaineAGenerer;
            
        // Maintenant on s'occupe du domaine,
        // On veut avoir plusieurs domaine possibles, donc on crée un tableau de domaines
            $domaines = array('yahoo', 'gmail', 'hotmail', 'msn', 'live', 'orange', 'free'); // Vous pouvez en ajouter ! 
            $tailleDuTableauDomaines = count($domaines); // Pour savoir la taille du tableau précédent.
         
        // Maintenant on s'occupe de l'extension,
        // On veut avoir plusieurs extensions possibles, donc on crée un tableau d'extensions
            $extensions = array('net', 'fr', 'org', 'com'); // Vous pouvez en ajouter !
            $tailleDuTableauExtensions = count($extensions); // Pour connaître la taille du tableau 'extensions'.
         
        // Maintenant, on veut un domaine et une extension aléatoires
            srand();
            $domaineAleatoire = rand(0, $tailleDuTableauDomaines-1); // Génère un domaine aléatoire
            $extensionAleatoire = rand(0, $tailleDuTableauExtensions-1); // Génère une extension aléatoire
         
        // Maintenant, j'ai assez travailler. Donne moi le mail!
            $mailAleatoire = $nomUtilisateur."@".$domaines[$domaineAleatoire].".".$extensions[$extensionAleatoire];
            
            return $mailAleatoire;
        }
         
        // On fait un appel
           // echo mailAleatoire();
    ?>