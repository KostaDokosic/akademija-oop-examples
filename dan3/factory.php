<?php

class Truck {
  public function drive() {
    echo "\nDriving truck ........";
  }
}

class TruckFactory {
  public function createTruck(): Truck {
    return new Truck();
  }
}

$factory = new TruckFactory();

for ($i=0; $i < 100; $i++) { 
  $truck = $factory->createTruck();
  $truck->drive();
}

?>