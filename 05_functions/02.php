<?php


function integer(int $base, int $multi):int {
    return $base * $multi;
}

echo integer(10, 5) . PHP_EOL;