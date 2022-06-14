<?php

$numbers =[];
for ($i = 0; $i <10; $i++){
    $numbers[$i] = rand(0,100);

}
$copyNum = $numbers;
$numbers[count($numbers) - 1] = -7;
echo 'Array1 ' . implode(' ,', $numbers). PHP_EOL;
echo 'Array2 '. implode(' ,', $copyNum);