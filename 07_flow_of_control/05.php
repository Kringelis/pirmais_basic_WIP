<?php

$stringWord = readline('enter your text:');
$letterCount = strlen($stringWord);
$arrayLetters = str_split($stringWord);
$arrayArray = explode(' ', $stringWord);
foreach ($arrayArray as $letter){
    echo $letter . ' ';
}

if ($arrayArray = "a" || "b" || "c") {
    echo '2' || '22' || '222';
} elseif ($arrayArray = 'd' || 'e' || 'f') {
    echo '3' || '33' || '333';
} elseif ($arrayArray = 'g' || 'h' || 'i') {
    echo '4' || '44' || '444';
} elseif ($arrayArray= 'j' || 'k' || 'l') {
    echo '5' || '55' || '555';
} elseif ($arrayArray = 'm' || 'n' || 'o') {
    echo '6' || '66' || '666';
} elseif ($arrayArray = 'p' || 'q' || 'r' || 's') {
    echo '7' || '77' || '777' || '7777';
} elseif ($arrayArray = 't' || 'u' || 'v') {
    echo '8' || '88' || '888';
} elseif ($arrayArray = 'w' || 'x' || 'y' || 'z') {
    echo '9' || '99' || '999' || '9999';
}

//$numberCombo = ["2", "22", "222", "3", "33", "333",
   // "4", "44", "444", "5", "55", "555",
   // "6", "66", "666", "7", "77", "777", "7777",
   // "8", "88", "888", "9", "99", "999", "9999"];