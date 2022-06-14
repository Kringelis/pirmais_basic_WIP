<?php

$correctNumber = rand(1, 100);

$maxAttempts = 3;
$attempts = 0;

while ($attempts < $maxAttempts)
{
    $number = readline('Guess the number: ');

    if (!is_numeric($number)) {
        echo 'Please enter only numbers.' . PHP_EOL;
        continue;
    }

    $number = (int)$number;

    if ($number === $correctNumber) {
        break;
    }

    if ($number > $correctNumber) {
        echo "Too High." . PHP_EOL;
    }

    if ($number < $correctNumber) {
        echo "Too low." . PHP_EOL;
    }

    $attempts++;
}

echo PHP_EOL;
echo $attempts === $maxAttempts ? "Sorry! The correct number was $correctNumber! " : 'Correct! ';
echo 'Thanks for playing!';


