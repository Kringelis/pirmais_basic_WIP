<?php


$numb = [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9];

foreach ($numb as $num) {
    if ($num % 3 == 0) {
        echo $num . PHP_EOL;
    }
}