<?php

$person = new stdClass();
$person->name = 'Janka';
$person->surname = 'KK';
$person->age = 24;

function checkAge(int $age): bool
{
    return $age > 18;
}


echo checkAge(24);