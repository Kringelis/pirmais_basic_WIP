<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
$value = readline('Enter the value to search for ');
$value = (int)$value;

if (in_array($value, $numbers)){
    echo 'Found' . PHP_EOL;
} else {
    echo 'Not found' . PHP_EOL;
}

//todo check if an array contains a value user entered
