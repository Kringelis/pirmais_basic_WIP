<?php

$number = readline('Enter number:');

function numCount(int $number){
    if ($number != 0){
        return 1 + numCount($number / 10);
    } else {
        return 0;
    }
}

echo numCount($number);