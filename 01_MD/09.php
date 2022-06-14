<?php

$weight = 176;
$height = 75;

$BMI = $weight * 703 / $height ** 2;

if ($BMI > 25) {
    echo 'Overweight!' . ' ';
} else {
    if ($BMI < 25 && $BMI > 18.5) {
        echo 'Optimal!' . ' ';
    } else {
        if ($BMI < 18.5) {
            echo 'Underweight!'. ' ';
        }
    }
}
echo $BMI . PHP_EOL;