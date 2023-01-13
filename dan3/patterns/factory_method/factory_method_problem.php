<?php 

class Transportation {

  public function requestTruckTransportation(Truck $truck) {
    echo "Someone requested truck transportation. Vehicle has been sent to location!";
    $truck->sendVehice();
  }

  public function requestShipTransportation(Ship $ship) {
    echo "Someone requested ship transportation. Vehicle has been sent to location!";
    $ship->sendVehice();
  }
}

class Truck {
  public function sendVehice() {
    //sending vehicle ....
  }
}

class Ship {
  public function sendVehice() {
    //sending vehicle ...
  }
}


?>