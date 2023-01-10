<?php

class Vehicle {

}

class Car extends Vehicle {

}

$vehicle = new Vehicle();
$car = new Car();

var_dump($vehicle instanceof Vehicle);
echo("<br />");
var_dump($vehicle instanceof Car);
echo("<br />");
var_dump($car instanceof Vehicle);
echo("<br />");
var_dump($car instanceof Car);
echo("<br />");
var_dump($vehicle instanceof $car);
echo("<br />");
var_dump($car instanceof $vehicle);

?>