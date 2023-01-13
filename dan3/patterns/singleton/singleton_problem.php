<?php 

class Counter {
  private $count;

  public function count() { $this->count++; }
  public function getCount() { return $this->count; }

  public function __construct() {
    $this->count = 0;
  }
}

$counter = new Counter();
while(true) {
  sleep(1);
  $counter->count();
  printf("\n%d", $counter->getCount());
}



//Later in code 
// $newCounter = new Counter();
// while(true) {
//   sleep(1);
//   $counter->count();
//   printf("\n%d", $counter->getCount());
// }
?>