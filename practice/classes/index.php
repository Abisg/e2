<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

var_dump($catalog->searchByName('apple'));

require 'index-view.php';