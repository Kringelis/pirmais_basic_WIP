<?php

$fact = 10;
$low = 1;

for($i = $fact; $i >= 1;$i--){
    $low = $low * $i;
}

echo $low;
