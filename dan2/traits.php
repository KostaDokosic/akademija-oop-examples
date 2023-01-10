<?php

trait Math {
  public function add($x, $y) {
    return $x + $y;
  }

  public function multiply($x, $y) {
    return $x * $y;
  }

  public function devide($x, $y) {
    return $x  / $y;
  }
}

class Calculator {
  use Math;
}

$myCalculator = new Calculator();

echo $myCalculator->add(2, 2);
echo "\n";

echo $myCalculator->devide(100, 10);
echo "\n";

echo $myCalculator->multiply(5, 25);
?>