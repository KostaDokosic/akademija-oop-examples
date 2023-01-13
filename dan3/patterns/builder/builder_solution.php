<?php 

interface HousePlan {
  public function setGarage();
  public function setGarden();
  public function setSwimmingPool();
}

class House implements HousePlan {
  public bool $hasGarage;
  public bool $hasSwimmingPool;
  public bool $hasGarden;

  public function setGarage() {
    $this->hasGarage = true;
  }
  public function setGarden() {
    $this->hasGarden = true;
  }
  public function setSwimmingPool()  {
    $this->hasSwimmingPool = true;
  }

  public function __construct() {}
}

interface IHouseBuilder {
  public function buildGarage();
  public function buildGarden();
  public function buildSwimmingPool();
}

class HouseBuilder implements IHouseBuilder {

  private House $house;
  
  public function __construct() {
    $this->createHouse();
  }

  private function createHouse() {
    $this->house = new House();
  }

  public function buildGarden() {
    $this->house->setGarden();
  }

  public function buildSwimmingPool() {
    $this->house->setSwimmingPool();
  }

  public function buildGarage() {
    $this->house->setGarage();
  }
}

$houseWithGarage = new HouseBuilder();
$houseWithGarage->buildGarage();

var_dump($houseWithGarage);

?>