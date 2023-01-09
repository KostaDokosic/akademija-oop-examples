<?php 

class Shape {
  public function getArea() {
    return 0;
  }
}

class Circle extends Shape {
  private $r;

  public function __construct($r) {
    $this->r = $r;
  }

  // public function getArea() {
  //   return pow($this->r, 2) * pi();
  // }
}

$simpleShape = new Shape();
var_dump($simpleShape->getArea());

$circle = new Circle(10);
var_dump($circle->getArea())

?>