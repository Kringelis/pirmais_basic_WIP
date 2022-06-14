<?php


$person = new stdClass();
$person->name = 'Janka';
$person->surname = 'KK';
$person->age = 24;

$person2 = new stdClass();
$person2->name = 'Juris';
$person2->surname = 'FF';
$person2->age = 12;

$person3 = new stdClass();
$person3->name = 'Peteris';
$person3->surname = 'AA';
$person3->age = 29;
$persons = [$person, $person2, $person3];


foreach ($persons as $person){
    return checkAge($person->age);
echo checkAge();
}

function checkAge(stdClass $age): bool
{
    return $age > 18;
}