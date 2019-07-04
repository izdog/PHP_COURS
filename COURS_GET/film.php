<?php 

    //La variable SuperGlobal $_GET
    var_dump($_GET);

    // La fonction ucfirst(String $str) permet de mettre en majuscule la première lettre d'une chaîne de caractères ucfirst = uppercase first
    
    echo "<h1>Je suis la page du film</h1>";

    //Attention il faudra toujours faire attention au données saisies par l'utilisateur
    // Pour échapper les caractères spéciaux on utilisera la fonction htmlspecialchars(String $str)

    // La fonction isset(), elle prendra en paramètre une variable. Cette fonction retournera un booleen, true si la variable existe et false si elle n'existe pas

    // La fonction empty(), elle prendra en paramètre une variable. Cette fonction retournera un booleen, true si la variable est vide et false si elle ne l'est pas
    
    // Si la variable est défini et n'est pas vide alors j'affiche celle-ci sinon j'affiche une erreur
    
    if(isset($_GET['film']) && !empty($_GET['film'])){
        $film = htmlspecialchars($_GET['film']);
        echo "Mon film préféré est : " . $film; 
    } else {
        echo "La variable du paramètre n'existe pas ou la variable est vide";
    }

    