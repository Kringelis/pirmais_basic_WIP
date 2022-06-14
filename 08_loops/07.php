<?php

$sum = (int)readline('Desired sum:');
$dice1 = rand(1, 6);
$dice2 = rand(1, 6);

do {
    for ($i = 1; $i == $sum; $i++) {}
        $i = $dice1 + $dice2;
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);
        echo $dice1 . ' and ' . $dice2 . PHP_EOL;
    } while ($sum !== $i); {
        echo "ding ! you rolled $i";
}

