<?php


interface MotorVehicle {
  public function turnOnEngine();
  public function accelerate();
}

class Engine {
  public function on() {}
  public function accelerate(int $power) {}
}

class MotorCar implements MotorVehicle {
  private Engine $engine;

  public function turnOnEngine() {
    $this->engine->on();
  }

  public function accelerate() {
    $this->engine->accelerate(1000);
  }
}


class ElectricCar implements MotorVehicle {
  public function turnOnEngine() {
    echo "There is no engine here ...";
  }

  public function accelerate() {
   
  }
}
?>