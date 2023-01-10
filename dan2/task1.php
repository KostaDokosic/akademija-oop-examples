<?php

abstract class Product {
  private string $serialNumber;
  public string $manufacturer;
  public string $model;
  protected float $price;
  private int $amount;

  public function getSerialNumber() { return $this->serialNumber; }
  public function getAmount() { return $this->amount; }
}

class RAM extends Product {
  private float $capacity;
  private float $frequency;

  public function __construct($capacity, $frequency)
  {
    $this->capacity = $capacity;
    $this->frequency = $frequency;
  }

  public function getCapacity() { return $this->capacity; }
  public function getFrequency() { return $this->frequency; }
}

class CPU extends Product {
  private int $coreNumber;
  private float $frequency;

  public function __construct($coreNumber, $frequency)
  {
    $this->coreNumber = $coreNumber;
    $this->frequency = $frequency;
  }

  public function getCoreNumber() { return $this->coreNumber; }
  public function getFrequency() { return $this->frequency; }
}

class HDD extends Product {
  private float $capacity;

  public function __construct($capacity)
  {
    $this->capacity = $capacity;
  }

  public function getCapacity() { return $this->capacity; }
}

class GPU extends Product {
  private float $frequency;

  public function __construct($frequency)
  {
    $this->frequency = $frequency;
  }

  public function getFrequency() { return $this->frequency; }
}



class Store {
  private $products;

  public function __construct()
  {
    $this->products = [];
  }

  public function addProduct(Product $product) {
    $this->products[] = $product;
  }

  public function getProducts() { return $this->products; }
}

$store = new Store();
var_dump($store->getProducts());

$hardDisk = new HDD(100);
$store->addProduct($hardDisk);
var_dump($store->getProducts());
?>