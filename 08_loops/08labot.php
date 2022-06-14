<?php

$min = (int)readline('Min:');
$max = (int)readline('Max:');

for ($i = $min; $i < $max; $i++) {
    for ($j = $min + 1; $j < $max; $j+ $min) {
        for ($k = $j + 1; $k < $max; $k++){
            echo $i . PHP_EOL;
        }
    }
}
echo 'sakāve';