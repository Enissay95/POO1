<?php

require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Truck.php';




$myCar = new Car('black', 5, 'diesel') ;

// Moving myCar

echo '<h1> car </h1>';

echo $myCar->start();

echo $myCar->forward();
echo '<br> My car speed : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';

echo $myCar->brake();
echo '<br> My car speed : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';

$myCar->dump();

// Moving myBike

$myBike = new Car('red', 1, 'My foot energy!');

echo ' My Bike ';

echo $myBike->start();
echo $myBike->forward();
echo '<br> My Bike speed : ' . $myBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $myBike->brake();
echo '<br> My Bike speed : ' . $myBike->getCurrentSpeed() . ' km/h' . '<br>';

$myBike->dump();
var_dump($myBike);

// POO PART 2 :

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


var_dump(Car::ALLOWED_ENERGIES);

// Moving the truck

echo 'Moving the truck :';

$truck = new Truck('yellow', 4, 'fuel',40);
$truck->setPayload(40);

echo $truck->start();
echo $truck->forward();
echo $truck->brake();

echo $truck->getFilling();
$truck->dump();









