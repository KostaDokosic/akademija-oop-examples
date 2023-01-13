<?php

class Counter {
  private static $instance;
  private int $count;

  private function __construct() {
    $this->count = 0;
  }

  static function getInstance() {
    if(self::$instance == NULL) {
      self::$instance = new Counter();
    }
    return self::$instance;
  }

  public function incrementCount() {
    $this->count++;
  }

  public function getCount() {
    return $this->count;
  }
}

while(true) {
  sleep(1);
  Counter::getInstance()->incrementCount();
  printf("\n%d", Counter::getInstance()->getCount());
}

?>