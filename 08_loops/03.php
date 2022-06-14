<?php

$name = readline('enter word: ');
$name2 = readline('enter word2: ');
$stringLen = 30;
$points = $stringLen - strlen($name) - strlen($name2);
echo $name;
for ($i = 1; $i <= $points; $i++){

    echo '.';
}
echo $name2;