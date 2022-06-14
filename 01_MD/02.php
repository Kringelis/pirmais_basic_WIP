<?php

function CheckOddEven(int $num): string
{
    if ($num % 2 == 0) {
        echo 'Even Number' . PHP_EOL . 'Bye!';
    } else {
        return 'Odd number' . PHP_EOL . 'Bye!';
    }
    return 'Bye!';
}

var_dump(CheckOddEven(11));

