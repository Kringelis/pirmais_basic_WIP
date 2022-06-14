<?php

$count = (int)readline('numnum:');

for ($i = 1; $i <= $count; $i++) {
  if ($i % 20 == 0){
      echo PHP_EOL;
  }
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'FizzBuzz' . ' ';
    } else {
        if ($i % 5 == 0) {
            echo 'Buzz' . ' ';
        } else {
            if ($i % 3 == 0) {
                echo 'Fizz' . ' ';
            } else {
                echo $i . ' ';
            }
        }
    }
}
