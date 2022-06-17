<?php

$sum = (int)readline('Desired sum:');
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);

do {
    for ($i = 0; $i == $sum; $i++) {
        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $i = $dice1 + $dice2;
        echo $dice1 . ' and ' . $dice2 . PHP_EOL;}
    } while ($sum == $i); {
        echo "ding ! you rolled $i";
}

