<?php

class Vehicle {
  protected $horsePower;

  public function __construct($horsePower) {
    $this->horsePower = $horsePower;
  }
}

class Car extends Vehicle {
  public function getHorsePower() {
    return $this->horsePower;
  }
}

$vehicle = new Vehicle(101);
$car = new Car(200);

var_dump($car->getHorsePower());

?>