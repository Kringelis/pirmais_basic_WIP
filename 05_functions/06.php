<?php


$stuff = [3, 7, 9, 10.65, 'cipars'];

function doubleStuff(int $num): int {
    return $num * 2;
}
for ($i = 0; $i < count($stuff); $i++)
{
    if (is_integer($stuff[$i])) {
    echo doubleStuff($stuff[$i]). PHP_EOL; }
}