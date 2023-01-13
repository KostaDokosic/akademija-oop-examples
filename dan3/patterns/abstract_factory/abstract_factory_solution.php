<?php 

interface Chair {
  public function sitOn();
}
interface Table {
  public function hasLegs();
}

class VictorianChair implements Chair {
  public function sitOn() {
    return true;
  }
}
class ModernChair implements Chair {
  public function sitOn() {
    return true;
  }
}

class VictorianTable implements Table {
  public function hasLegs() {
    return false;
  }
}
class ModernTable implements Table {
  public function hasLegs() {
    return true;
  }
}

interface FurnitureFactory {
  public function createChair();
  public function createCoffeTable();
}

class VictorianFurnitureFactory implements FurnitureFactory {
  public function createChair() {
    return new VictorianChair("");
  }
  public function createCoffeTable() {
    return new VictorianTable("");
  }
}

class ModernFurnitureFactory implements FurnitureFactory {
  public function createChair() {
    return new ModernChair("");
  }
  public function createCoffeTable() {
    return new ModernTable("");
  }
}

?>