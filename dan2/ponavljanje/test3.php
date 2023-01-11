<?php 

class Person {
  public $name;
  private $email;
}

class Driver extends Person {
  public $truck;

  public function getEmail()  {  return $this->email;  }
}

$driver = new Driver("");
echo $driver->getEmail();


?>