<?php

$diceRoll = rand(1, 6);
if ($diceRoll == 1) {
    echo 'LOSER';
    exit;
}
echo "You rolled $diceRoll!";
$nextTurn = readline('Roll again?');

if ($nextTurn === 'n') {
    exit;
}
$winner = 10;
$dicePoints = $diceRoll;
for ($i = $diceRoll; $i <= 10; $i++) {

    $roll = rand(1, 6);
    echo " You rolled $roll" . PHP_EOL;
    $i += $roll;
    echo $i . '     ';
    while ($i < 10) {
        $i += $roll;
    }
    if ($roll == 1) {
        echo "LOSER!";
        break;
    } else {
        $i = $roll + $diceRoll;
    }
    if ($i >= $winner) {
        echo "winner";
    }

}

