<?php
        /*
        Site de l'auteur : http://prepamp.free.fr
        email : rifly01@gmail.com
        */
          



// On cr�e une fonction qui va g�n�rer des chaines al�atoires,
function caracteresAleatoires($nombreDeCaracteres){
    $string = "";
    $chaine = "abcdefghijklmnpqrstuvwxyz123456789_"; // On choisit une combinaison ici.
    
    srand((double)microtime()*1000000);
    
    for($i=0; $i<$nombreDeCaracteres; $i++){
        $string .= $chaine[rand()%strlen($chaine)]; // On choisit $nombreDeCaracteres caract�res au hasard.
    }
    
    // On obtient cette chaine compl�tement al�atoire !
    return $string;
    
}

        function mailAleatoire(){
         
         
        // On choisit le nom d'utilisateur de fa�on al�atorie,
            $tailleDeLaChaineAGenerer = caracteresAleatoires(10); // Vous pouvez changer la taille de la chaine !
            $nomUtilisateur = $tailleDeLaChaineAGenerer;
            
        // Maintenant on s'occupe du domaine,
        // On veut avoir plusieurs domaine possibles, donc on cr�e un tableau de domaines
            $domaines = array('yahoo', 'gmail', 'hotmail', 'msn', 'live', 'orange', 'free'); // Vous pouvez en ajouter ! 
            $tailleDuTableauDomaines = count($domaines); // Pour savoir la taille du tableau pr�c�dent.
         
        // Maintenant on s'occupe de l'extension,
        // On veut avoir plusieurs extensions possibles, donc on cr�e un tableau d'extensions
            $extensions = array('net', 'fr', 'org', 'com'); // Vous pouvez en ajouter !
            $tailleDuTableauExtensions = count($extensions); // Pour conna�tre la taille du tableau 'extensions'.
         
        // Maintenant, on veut un domaine et une extension al�atoires
            srand();
            $domaineAleatoire = rand(0, $tailleDuTableauDomaines-1); // G�n�re un domaine al�atoire
            $extensionAleatoire = rand(0, $tailleDuTableauExtensions-1); // G�n�re une extension al�atoire
         
        // Maintenant, j'ai assez travailler. Donne moi le mail!
            $mailAleatoire = $nomUtilisateur."@".$domaines[$domaineAleatoire].".".$extensions[$extensionAleatoire];
            
            return $mailAleatoire;
        }
         
        // On fait un appel
           // echo mailAleatoire();
    ?>