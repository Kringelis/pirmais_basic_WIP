<?php

$base = (int)readline("Input number of terms: ");
$pow = (int)readline('how many times? ');

$num = 1;
for ($i = 0; $i < $pow; $i++) {
    $num *= $base;
    echo $num . ' ';
}


//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function