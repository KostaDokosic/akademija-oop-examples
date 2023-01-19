<?php

interface BearKeeper {
  public function feedTheBear();
  
}
interface BearKeeper2 {
  public function petTheBear(); 
  public function washTheBear();
  
}

class BearRarer implements BearKeeper, implements BearKeeper2 {
  public function washTheBear() {

  }

  //PROBLEM ?
 }

?>