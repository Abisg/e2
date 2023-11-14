<?php

function getCelsius($temperature = NULL, $includeUnit = TRUE)
{

    // $x = ($temperature * 1.8 + 32 # f -> c

    # https://en.wikipedia.org/wiki/Fahrenheit#Definition_and_conversion
    $results = ($temperature - 32) / 1.8;

    if ($includeUnit) {

        $tempCelsius = $results . ' C';
        return $tempCelsius;
    } else {
        return $results;
    }
}