<?php

abstract class Animal {
  public $numberOfLegs;

  public abstract function speak();
}

class Dog extends Animal {
  public function speak() {
    echo "\nWoof";
  }
}

class Cat extends Animal {
  public function speak() {
    echo "\nMeow";
  }
}

$cat = new Cat("");
$dog = new Dog("");

$cat->speak();
$dog->speak();


?>