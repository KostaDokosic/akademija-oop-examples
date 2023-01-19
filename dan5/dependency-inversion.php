<?php

interface KEyboard {

}

interface StandardKeyboard  {

}
interface premiumKeyboard {

}

interface PremiumMonitor {

}

class Windows98Machine {
  public StandardKeyboard $keyboard;
  public Keyboard $monitor;
  //...

  public function setKeyboard($keyboard) {
    $this->keyboard = $keyboard;
  }

  public function __construct($keyboard, $monitor) {
    $this->keyboard = $keyboard;
    $this->monitor = $monitor;
  }
  // PROBLEM ?
}
$premiumKeyboard = new PremiumKeyboard();
$windows = new Windows98Machine();

$windows->setKeyboard($premiumKeyboard);
?>