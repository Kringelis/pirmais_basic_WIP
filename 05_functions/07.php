<?php

$person = new stdClass();
$person->name = 'Janis';
$person->license = ['a', 'b', 'c'];
$person->cash = 800;

$gun = new stdClass();
$gun->name = 'Pistol';
$gun->license = 'a';
$gun->price = 250;

$gun2 = new stdClass();
$gun2->name = 'Shotgun';
$gun2->license = 'b';
$gun2->price = 450;

$gun3 = new stdClass();
$gun3->name = 'AR';
$gun3->license = 'c';
$gun3->price = 750;

$gun4 = new stdClass();
$gun4->name = 'Rocket';
$gun4->license = 'd';
$gun4->price = 1500;

$guns = [$gun, $gun2, $gun3, $gun4];

