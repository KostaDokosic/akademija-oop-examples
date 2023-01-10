<?php 

interface Paintable {
  public function setColor($color);
  public function getColor();
}

class Car implements Paintable {
  private $color = 'white';

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }
}

class Wall implements Paintable {
  private $wallColor = 'red';

  public function setColor($color)
  {
    $this->wallColor = $color;
  }

  public function getColor()
  {
    return $this->wallColor;
  }
}

$car = new Car("");
$wall = new Wall("");

$car->setColor("purple");
$wall->setColor("green");

printf("\n Car color:  %s",  $car->getColor());
printf("\n Wall color: %s",  $wall->getColor());
?>