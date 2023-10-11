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

$randomWordForPlayerA = $words[array_rand($words)];
$randomWordForPlayerB = $words[array_rand($words)];

// Associate players/guesses 
if ($randomWordForPlayerA == $randomWord) {
    $correctA = true;
} else {
    $correctA = false;
};

if ($randomWordForPlayerB == $randomWord) {
    $correctB = true;
} else {
    $correctB = false;
}

require 'index-view.php';
