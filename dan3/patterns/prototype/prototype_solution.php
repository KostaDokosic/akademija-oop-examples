<?php

abstract class Shape {
  public int $x, $y, $z;

  public function __construct(int $x, int $y, int $z) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }

  abstract function __clone();
}

class Rectangle extends Shape {
  public string $color;

  public function __construct(int $x, int $y, int $z, string $color) {
    parent::__construct($x, $y, $z);
    $this->color = $color;
  }

  public function __clone() {
    // return new Rectangle($this->x, $this->y, $this->z, $this->color);
  }
}

$myRectangle = new Rectangle(1, 0, 2, "red");
$copyOfMyRectangle = clone $myRectangle;

echo $copyOfMyRectangle->color;

?>