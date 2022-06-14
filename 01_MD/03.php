<?php

$lower = 1;
$upper = 100;
$sum = 0;

for ($i = 1; $i <= $upper; $i++) {
    $sum += $i;
}
$average = $sum / $upper;
echo $sum . PHP_EOL;
echo $average . PHP_EOL;