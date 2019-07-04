<?php

$etudiants = [
    [
        'nom' => 'Brigitte',
        'prenom' => 'Jean'
    ],
    [
        'nom' => 'Dupont',
        'prenom' => 'Marcel'
    ],
    [
        'nom' => 'Smith',
        'prenom' => 'Paul'
    ],
    [
        'nom' => 'Doe',
        'prenom' => 'Jane'
    ],
];

var_dump($etudiants);

$listeNoms = array_column($etudiants, 'nom');

$brigitteExiste = array_search('Brigitte', $listeNoms);
$brigitteExiste2 = array_search('Brigitte', array_column($etudiants, 'nom'));

var_dump($listeNoms, $brigitteExiste);
