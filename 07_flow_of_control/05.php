<?php

$stringWord = readline('enter your text:');
$letterCount = strlen($stringWord);
$arrayLetters = str_split($stringWord);
$arrayArray = implode(' ', $arrayLetters);

if ($arrayArray )
echo $arrayArray;


$numberCombo = ["2","22","222", "3","33","333",
             "4","44","444", "5","55","555",
             "6","66","666", "7","77","777","7777",
             "8","88","888", "9","99","999","9999"];