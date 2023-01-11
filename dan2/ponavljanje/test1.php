<?php

class User {
  public string $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  private function getName() {
    return $this->name;
  }
}

$user = new User("Pera");
echo $user->getName();

?>