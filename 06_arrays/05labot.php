<?php

$board = [
    ['', '', ''],
    ['', '', ''],
    ['', '', ''],
];
$playerOne = 'X';
$cell = [0 => 0, 1 => 0];
$maxVal = 2;


function game($board, $cell, $playerOne)
{
    $output = '';
    $output .= 'Player: ' . $playerOne . PHP_EOL;
}

foreach ($board as $x => $vert) {
    $output = '|';
    foreach ($vert as $y => $block) {
        switch ($block) {
            case '';
                $cells = ' ';
                break;
            case 'X';
                $cells = 'X';
                break;
            case 'O';
                $cells = 'O';
                break;
        }
        if ($cell[0] == $x && $cell[1] == $y) {
            $cells = '-' . $cells . '-';
        } else {
            $cells = ' ' . $cells . ' ';
        }
        $output = $cells . '|';
        $output = PHP_EOL;
    }
    return $output;
}


echo game($board, $cell, $playerOne);
/* $turn = readline('Enter coordinates:');
if ($turn > $maxVal){
    echo 'Out of bounds';
}

*/


