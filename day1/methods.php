<?php 

class Vehicle {
  public $model;
  private $color;

  public function __construct($model) {
    $this->model = $model;
  }

  public function setColor($color) {
    $this->color = $color;
  }

  public function getColor() {
    return $this->color;
  }
  
  public function startEngine() {
    $rnd = rand(1, 10);
    if($rnd >= 5) {
      printf("%s engine started successfully!", $this->model);
    } else {
      printf("%s engine failed to start!", $this->model);
    }
  }
}

$truck = new Vehicle("Scania");
$truck->startEngine();

$truck->setColor('blue');
echo("<br />");
echo($truck->getColor())

?>