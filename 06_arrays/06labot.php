<?php

$words = ['lietus', 'sargs', 'lietussargs', 'diena', 'nakts', 'pastaiga'];

$maxAttempts = 10;
$attempts = 0;

while ($attempts < $maxAttempts) {
    $guess = readline('Enter your letter: ');
    if (strlen($guess) > 1) {
        echo 'One letter at a time please!' . PHP_EOL;
    }


    $attempts++;
}

echo $words[array_rand($words)];