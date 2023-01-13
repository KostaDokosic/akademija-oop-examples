<?php

interface Vehicle {
  public function inspect();
}

class Car implements Vehicle {
  public function inspect() {
    echo "\nInspecting Car......";
  }
}

class Bike implements Vehicle {
  public function inspect() {
    echo "\nInspecting Bike.....";
  }
}

interface VehicleFactory {
  public function createVehicle(): Vehicle;
}

class CarFactory implements VehicleFactory {
  public function createVehicle(): Vehicle {
    return new Car("");
  }
}

class BikeFactory implements VehicleFactory {
  public function createVehicle(): Vehicle {
    return new Bike("");
  }
}

class InspectionService {
  private static $instance;
  private $inspectedCount;

  private function __construct() {
    $this->inspectedCount = 0;
  }

  public function getInspectedCount() { return $this->inspectedCount; }

  public static function getInstance() {
    if(self::$instance == null) {
      self::$instance = new InspectionService();
    }
    return self::$instance;
  }

  public function inspectVehicle(Vehicle $vehicle) {
    $vehicle->inspect();
    $this->inspectedCount++;
  }
}

$carFactory = new CarFactory();
$bikeFactory = new BikeFactory();

$car = $carFactory->createVehicle();
$bike = $bikeFactory->createVehicle();

InspectionService::getInstance()->inspectVehicle($car);
InspectionService::getInstance()->inspectVehicle($bike);

printf("\nTotal number of inspected vehicles: %d", InspectionService::getInstance()->getInspectedCount());

?>