<?php

session_start();

if (isset($_SESSION['results'])) {
    $winner = $_SESSION['results']['winner'];
    $guess = $_SESSION['results']['guess'];
    $choice = $_SESSION['results']['choice'];
}



/* $words = [
    'community',
    'develop',
    'environment',
    'excellent'
];
//Picks random word from array
$randomWord = $words[array_rand($words)];

//Create random word for each person
$randomWordForPlayerA = $words[array_rand($words)];
$randomWordForPlayerB = $words[array_rand($words)];

//Boolean for Player A chances
if ($randomWordForPlayerA == $randomWord) {
    $correctA = true;
} else {
    $correctA = false;
};

//Boolean for Player B chances
if ($randomWordForPlayerB == $randomWord) {
    $correctB = true;
} else {
    $correctB = false;

}
*/

require 'index-view.php';
