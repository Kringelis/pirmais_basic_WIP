<?php
$min = (int)readline('min');
$max = (int)readline('max');

    for($i = $min; $i <= $max; $i++) {
        for($j = $i; $j <= $max; $j++) {
            echo $j . PHP_EOL;
        }
        for($k = $j; $k < $i - $min; $k++) {
            echo $min + $k . PHP_EOL;
        }
        echo $i + $j + $k;
    }

