<?php 

class House {
  public bool $hasGarage;
  public bool $hasStatues;
  public bool $hasSwimmingPool;
  public bool $hasGarden;
  // +100x more options

  public function __construct(bool $hasGarage, bool $hasStatues, bool $hasSwimmingPool, bool $hasGarden)
  {
    $this->hasGarage = $hasGarage;
    $this->hasStatues = $hasStatues;
    $this->hasSwimmingPool = $hasSwimmingPool;
    $this->hasGarage = $hasGarden;

    //create walls
    //create coors
    //setup lights
    //create floor
    //fit windows
    //build garden
    //build swimming pool
    //......
  }
}

$houseWithPool = new House(false, false, true, false);
$houseWithGarageAndGarden = new House(true, false, false, true);
//WHY DO I NEED TO DEFINE PARAMETERS THAT NOT GONNA BE USED?
//IN MOST CASES THIS PARAMETERS NOT GONNA BE USED!

?>