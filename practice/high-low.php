<?php

function checkNumber($guess, $mysteryNumber)
{
    if ($guess == $mysteryNumber) {
        return 'correct';
    }
}