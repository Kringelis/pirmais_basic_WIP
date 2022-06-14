<?php

$fruits = [
    [
        'name' => 'banana',
        'weight' => 10
    ],
    [
        'name' => 'orange',
        'weight' => 25
    ]

];

foreach ($fruits as $fruit) {

    echo $fruit['name'] . ' ' . $fruit['weight'];

    if ($fruit['weight'] > 10) {
        echo 'Shipping 2 euro' . PHP_EOL;
    } else {
        echo 'Shipping 1 euro' . PHP_EOL;
    }
}