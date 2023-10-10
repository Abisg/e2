<?php
//array of strings
$words = [
    'community',
    'develop',
    'environment',
    'excellent'
];
//Random scrambled word 
$randomWord = $words[array_rand($words)];

$randomWordForPerson = $words[array_rand($words)];

// Associate players/guesses 
if ($randomWordForPerson == $randomWord) {
    $correct = true;
} else {
    $correct = false;
};

require 'index-view.php';