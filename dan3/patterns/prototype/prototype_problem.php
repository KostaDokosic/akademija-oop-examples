<?php 

//Lets say you have an object, and you want to create an exact copy of it. How would you do it?

class Shape {
  public $size;
  public $name;
  public $color;

  public function __construct($size, $name, $color) {
    $this->size = $size;
    $this->name = $name;
    $this->color = $color;
  }
} 

class Rectangle extends Shape {
  public $line;

  public function __construct($size, $name, $color, $line) {
    parent::__construct($size, $name, $color);
    $this->line = $line;
  }
}
class Box extends Shape {
  public function __construct($size, $name, $color) {
    parent::__construct($size, $name, $color);
  }
}

$someRandomShape = new Rectangle(1, "Neki Objekat", "red", 0.1);

//Late in code ...
//I have shape object but I need to make new one with exact same params.
if($someRandomShape instanceof Box) {
  $shapeCopy = new Box($someRandomShape->size, $someRandomShape->name, $someRandomShape->color);
} else if($someRandomShape instanceof Rectangle) {
  $shapeCopy = new Rectangle($someRandomShape->size, $someRandomShape->name, $someRandomShape->color, $someRandomShape->line);
}
///else if, else if, else if ............ 1000x?


?>