<?php 

//1. CLASS WITH PRIVATE CONSTRUCTOR
//2. STATIC PARAM INSTANCE
//3  STATIC getInstance METHOD
//4. ASSIGN INSTANCE TO NEW CLASS IF NOT EXISTS
//5. RETURN INSTANCE

class Counter {
  private static $instance;
  private $count;

  private function __construct() {
    $this->count = 0;
  }

  static function getInstance() {
    if(self::$instance == NULL) {
      self::$instance = new Counter();
    }
    return self::$instance;
  }

  public function count() { $this->count++; }
  public function getCount() { return $this->count; }
}

while(true) {
  sleep(1);
  Counter::getInstance()->count();
  printf("\n%d", Counter::getInstance()->getCount());
}


?>