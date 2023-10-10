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
$randomIndex = array_rand($words);
$word = $words[$randomIndex];

// Split words into charaters
$characters = str_split($word);
shuffle($characters);

// Associate players & guesses
$playerA = 'Player A';
$playerB = 'Player B';

$guessA = '';
$guessB = '';

var_dump($randomIndex);



require 'index-view.php';