<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$mycar = new Car('red', 5, 'fuel');
var_dump($mycar->switchOn());
var_dump($mycar->switchOff());

$mybike = new Bicycle('blue', 1, 2);
var_dump($mybike);
var_dump($mybike->switchOff());
var_dump($mybike->switchOn());

$mybike->setCurrentSpeed(15);
var_dump($mybike);
var_dump($mybike->switchOn());

$myskate = new Skateboard('green', 0, 4);
var_dump($myskate);

