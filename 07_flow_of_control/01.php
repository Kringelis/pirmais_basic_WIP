<?php


$number1 = readline("Input the 1st number: ");

$number2 = readline("Input the 2nd number: ");

$number3 = readline("Input the 3rd number: ");

if ($number1 > $number2 && $number1 > $number3){
    echo "$number1";
} elseif ($number2 > $number1 && $number2 > $number3){
    echo "$number2";
} elseif ($number3 >$number2 && $number3 > $number1){
    echo "$number3";
}

//todo print the largest number