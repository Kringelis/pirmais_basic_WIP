<?php


function fifteen(int $uno, int $dos): bool
{
    return $uno + $dos == 15 || $uno - $dos == 15 || $uno == 15 || $dos == 15;
}

var_dump(fifteen(11, 5));
var_dump(fifteen(10, 5));
var_dump(fifteen(15, 0));