<?php

$moves = ['rock', 'paper', 'scissors']; #Array of Strings

$strawLengths = [2, 2, 2, 2, 2, 1]; #Array of numerical values

$mixed = ['rock', 1, .04, true];

//Extracting 
//echo $moves[0];

$randomNumber = rand(0, 2);

$move = $moves[$randomNumber]; #Randomize rock paper scissors

#Associative Arrays
$coin_values = [
    'penny' => .01,
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25
];

$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' => 100,
    'quarter' => 34
];

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

foreach ($cards as $key => $card) {
    $cardToDeal = array_pop($cards);

    if ($key % 2 == 0) {
        $playerCards[] = $cardToDeal;
    } else {
        $computerCards[] = $cardToDeal;
    }
};

var_dump($playerCards);
var_dump($computerCards);
//$playerCards = array_splice($cards, 0, count($cards) / 2);
//$computerCards = $cards;

//var_dump($computerCards);



//$playerDraw = $playerCards[count($playerCards) - 1];

// $playerDraw = array_pop($playerCards);
// var_dump($playerCards);
// var_dump($playerDraw);

$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
//var_dump($str); // Prints mary had a little lamb and she loved it so

$stringA = "Mary Had A Little Lamb and She LOVED It So";
$stringB = "mary";

//var_dump(stripos($stringA, $stringB));