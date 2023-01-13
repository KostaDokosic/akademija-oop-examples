<?php 

interface Logistics {
  public function planDelivery(Transport $vehicle);
  public function createTransport();
}

interface Transport {
  public function deliver();
}

class Truck implements Transport {
  public function deliver() {
    echo "Delivering by land in a box";
  }
}

class Ship implements Transport {
  public function deliver() {
    echo "Delivering by sea in a container";
  }
}


class RoadLogistics implements Logistics {
  public function planDelivery(Transport $vehicle) { 
    $vehicle->deliver();
  }
  public function createTransport() {
    return new Truck();
  }
}

class SeaLogistics implements Logistics {
  public function planDelivery(Transport $vehicle) { 
    $vehicle->deliver();
  }
  public function createTransport() {
    return new Ship();
  }
}

?>