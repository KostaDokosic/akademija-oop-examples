<?php

class Vehicle {
  private $horsePower;

  public function __construct($horsePower) {
    $this->horsePower = $horsePower;
  }
}

class Car extends Vehicle {
  public function getHorsePower() {
    return $this->horsePower;
  }
}


$car = new Car(200);
var_dump($car->getHorsePower());

?>