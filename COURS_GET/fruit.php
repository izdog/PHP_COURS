<?php 
    $fruits = [
        [
            'id' => 1,
            'nom' => 'banane'
        ],
        [
            'id' => 2,
            'nom' => 'cerise'
        ],
        [
            'id' => 3,
            'nom' => 'mangue'
        ],
        [
            'id' => 100,
            'nom' => 'fraise'
        ]
    ];

    // ON test si la variable existe et si elle n'est pas vide 

    if(isset($_GET['id']) && !empty($_GET['id'])){
        // J'échappe les caractères spéciaux
        $id = htmlspecialchars($_GET['id']);
        // On récupère l'indice et on vérifie si l'id existe dans notre tableau
        $listeID = array_column($fruits, 'id');
        $indice = array_search($id, $listeID);

        // On vérifie si on récupère un indice (si il existe un élement avec id passé en paramètre)
        if($indice !== false){
            $fruit = $fruits[$indice];
        }else {
            $error = 'Le fruit que vous avez demandé n\'existe pas';
        }
    } else {
        $error = 'Une erreur est survenue';
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php if(isset($fruit)): ?>
        <h1><?= $fruit['nom'] ?></h1>
        <a href="https://fr.wikipedia.org/wiki/<?= $fruit['nom'] ?>">Wikipedia - <?= $fruit['nom'] ?></a>
    <?php else: ?>
        <strong><?= $error ?></strong>
    <?php endif; ?>

    
</body>
</html>