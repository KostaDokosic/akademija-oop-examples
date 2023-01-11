<?php 

class Vehicle {
  public float $speed;
}

class Opel extends Vehicle {

}

class Tesla extends Vehicle {

}

$vehicle = new Vehicle("");
$teslaS1 = new Tesla("");
$opelAstra = new Opel("");


var_dump($opelAstra instanceof Vehicle);
var_dump($vehicle instanceof Tesla);
var_dump($teslaS1 instanceof Opel);

?>