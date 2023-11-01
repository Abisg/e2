<?php

session_start();

$choice = $_POST['choice'];

$guess = guessWord();

$winner = $choice == $guess;

function guessWord()
{
    $words = [
        'community',
        'develop',
        'environment',
        'excellent'
    ];

    return $words[array_rand($words)];
}

$_SESSION['results'] = [
    'winner' => $winner,
    'guess' => $guess,
    'choice' => $choice
];

header('Location: index.php');
