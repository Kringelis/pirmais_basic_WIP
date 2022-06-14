<?php

$days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];

$dayNumber = (int)readline('Enter your day here:');


if ($dayNumber <= 6) {
    switch ($dayNumber) {
        case 0;
            echo $days[0];
            break;
        case 1;
            echo $days[1];
            break;
        case 2;
            echo $days[2];
            break;
        case 3;
            echo $days[3];
            break;
        case 4;
            echo $days[4];
            break;
        case 5;
            echo $days[5];
            break;
        case 6;
            echo $days[6];
            break;
        default:
            echo 'Not a valid day';
    }
    if ($dayNumber > 6) {
        echo 'Not a valid day';
    }
}
