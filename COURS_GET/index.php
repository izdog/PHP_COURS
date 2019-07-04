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

    // Créer un algorithme qui vérifie si un fruit avec l'id 1,2,3,4 etc ... existe 

    // La fonction array_search($element, Array $array), cette fonction retourne l'index de l'élément recherché si il existe sinon false

    // La fonction array_column(Array $array, $clef) permet de retourner un tableau de toutes les valeurs pour une clef défini 

    $elementExiste = array_search(4, array_column($fruits, 'id'));

    // var_dump($elementExiste);



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
    <h1>Mon panier de fruit :</h1>
    <ul>
        <?php foreach($fruits as $fruit): ?>

            <li><strong>ID : </strong><a href="fruit.php?id=<?=$fruit['id']?>"><?= $fruit['id']?></a> - <?= ucfirst($fruit['nom']) ?></li>

        <?php endforeach; ?>
        
    </ul>

    <a href="film.php?film=shrek">Mon film</a>
</body>
</html>