<?php

$fighters = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$player = readline("Choose your fighter!");

$cpu = rand(0, 4);

if ($player == $fighters[0] && $cpu == $fighters[1]) {
    echo 'CPU win!';
} elseif ($player == $fighters[1] && $cpu == $fighters[2]) {
    echo 'CPU win!';
} elseif ($player == $fighters[2] && $cpu == $fighters[0]) {
    echo "CPU win";
} elseif ($player == $fighters[1] && $cpu == $fighters[0]) {
    echo 'Player win';
} elseif ($player == $fighters[2] && $cpu == $fighters[1]) {
    echo 'Player win';
} elseif ($player == $fighters[0] && $cpu == $fighters[2]) {
    echo 'Player win';
} elseif ($player == $fighters[0] && $cpu == $fighters[0]) {
    echo 'Draw';
} elseif ($player == $fighters[1] && $cpu == $fighters[1]) {
    echo 'Draw';
} elseif ($player == $fighters[2] && $cpu == $fighters[2]) {
    echo 'Draw';
} elseif ($player == $fighters[0] && $cpu == $fighters[3]) {
    echo 'Player win';
} elseif ($player == $fighters[2] && $cpu == $fighters[3]) {
    echo 'Player win';
} elseif ($player == $fighters[1] && $cpu == $fighters[3]) {
    echo 'CPU win';
} elseif ($player == $fighters[4] && $cpu == $fighters[3]) {
    echo 'CPU win';
} elseif ($player == $fighters[2] && $cpu == $fighters[4]) {
    echo 'CPU win';
} elseif ($player == $fighters[0] && $cpu == $fighters[4]) {
    echo 'CPU win';
} elseif ($player == $fighters[1] && $cpu == $fighters[4]) {
    echo 'Player win';
} elseif ($player == $fighters[3] && $cpu == $fighters[4]) {
    echo 'Player win';
} elseif ($player == $fighters[4] && $cpu == $fighters[4]) {
    echo 'Draw';
} elseif ($player == $fighters[3] && $cpu == $fighters[3]) {
    echo 'Draw';
} elseif ($player == $fighters[4] && $cpu == $fighters[0]){
    echo 'CPU win';
} elseif ($player == $fighters[3] && $cpu == $fighters[0]){
    echo 'Player win';
} elseif ($player == $fighters[3] && $cpu == $fighters[1]){
    echo 'CPU win';
} elseif ($player == $fighters[4] && $cpu == $fighters[1]){
    echo 'CPU win';
} elseif ($player == $fighters[3] && $cpu == $fighters[2]){
    echo "CPU win";
} elseif ($player == $fighters[4] && $cpu == $fighters[2]){
    echo 'Player win';
}

