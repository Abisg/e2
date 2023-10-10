<?php
//array of strings
$words = [
    'community',
    'develop',
    'environment',
    'excellent',
    'vehicle'
];
//Random scrambled word 
$randomIndex = $words[array_rand($words)];

// Split words into charaters
$characters = str_shuffle($randomIndex);

echo '"Scrambled Word is: " $characters';

// Associate players & guesses
$playerA = 'Player A';
$playerB = 'Player B';

$guessA = '';
$guessB = '';


var_dump($randomIndex);



require 'index-view.php';