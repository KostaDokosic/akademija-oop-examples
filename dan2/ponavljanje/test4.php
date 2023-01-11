<?php 

class Shape {
  protected float $size = 0;

  public function __construct(float $size)
  {
    $this->size = $size;
  }

  public function getSize() {
    echo $this->size;
  }
}

class Circle extends Shape {
  public function getSize() {
    echo $this->size * $this->size * pi();
  }
}

$myCircle = new Circle(3);
$myCircle->getSize();

?>