<?php

require 'car.php';


$myCar = new car('black', 5, 'diesel') ;

// Moving myCar

echo '<h1> car </h1>';

echo $myCar->start();

echo $myCar->forward();
echo '<br> My car speed : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';

echo $myCar->brake();
echo '<br> My car speed : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';

$myCar->dump();

// Moving myBike

$myBike = new car('red', 1, 'My foot energy!');

echo ' My Bike ';

echo $myBike->start();
echo $myBike->forward();
echo '<br> My Bike speed : ' . $myBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $myBike->brake();
echo '<br> My Bike speed : ' . $myBike->getCurrentSpeed() . ' km/h' . '<br>';

$myBike->dump();
var_dump($myBike);






