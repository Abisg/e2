<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';


$example1 = new HES\Number(10);
//$example2 = new HES\EvenNumber(10);


//var_dump($example1->isValid());

//var_dump($example2->isValid());

#How to interact with classes
//$debug = new Debug(); #set new instance = object AKA instantiating an object
$debug->dump('Hello World'); #From that object, invoke methods