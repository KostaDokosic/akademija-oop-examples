<?php 

class Chair {
  public string $type; //Modern, Victorian, ArtDeco
  //public $size, $height, $color, $pattern, $weight ....

  public function __construct($type) {
    $this->type = $type;
  }
}

class Sofa {
  public string $type; //Modern, Victorian, ArtDeco
  //public $size, $height, $color, $pattern, $weight ....

  public function __construct($type) {
    $this->type = $type;
  }
}

class CoffeeTable {
  public string $type; //Modern, Victorian, ArtDeco
  //public $size, $height, $color, $pattern, $weight ....

  public function __construct($type) {
    $this->type = $type;
  }
}


//customer wants modern chair !
$modernChair = new Chair("Modern");

//customer order modern sofa
$modernSofa = new Sofa("Modernn"); //Typo!

//customer wants victorian table
$victorianTable = new CoffeeTable("Victorian");

?>