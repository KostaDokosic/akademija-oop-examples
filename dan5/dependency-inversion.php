<?php

interface StandardKeyboard {

}

interface PremiumMonitor {

}

class Windows98Machine {
  public StandardKeyboard $keyboard;
  public PremiumMonitor $monitor;
  //...

  public function __construct($keyboard, $monitor) {
    $this->keyboard = $keyboard;
    $this->monitor = $monitor;
  }
  // PROBLEM ?
}

?>