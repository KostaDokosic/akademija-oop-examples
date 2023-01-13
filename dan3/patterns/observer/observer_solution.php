<?php

interface StoreSubject {
  public function attach(Customer $customer): void;
  public function detach(Customer $customer): void;
  public function notify(string $message): void;
}

class Store implements StoreSubject {
  private $customers;
  private string $name;
  public $products = [];

  public function __construct(string $name) {
    $this->customers = [];
    $this->name = $name;
  }

  function getName() { return $this->name; }

  function hasProduct(string $product) {
    return in_array($product, $this->products);
  }

  function addProduct(string $product) {
    $this->products[] = $product;
    $this->notify("{$product} arrived");
  }

  public function attach(Customer $customer): void {
    $this->customers[] = $customer;
  }

  public function detach(Customer $customer): void {
    foreach($this->customers as $key => $val) {
      if($val === $customer) {
        unset($this->customers[$key]);
      }
    }
  }

  public function notify(string $message): void {
    foreach($this->customers as $observer) {
      printf("\nMessage to %s = (%s)", $observer->getName(), $message);
    }
  }
}

class Customer {
  private $name;

  public function __construct($name) {
    $this->name = $name;
  }

  function getName() { return $this->name; }

  private function subscribeToStore(Store $store) {
    $store->attach($this);
    printf("\n%s is now subscribed to %s.", $this->name, $store->getName());
  }

  public function buyProduct(Store $store, string $product) {
    if($store->hasProduct($product)) {
      printf("\n%s has purchased %s", $this->name, $product);
    } else {
      printf("\n%s is not in stock. \n%s will be notified when product arrives!", $product, $this->name);
      $this->subscribeToStore($store);
    }
  }
}

$store = new Store("Super Store");
$pera = new Customer("Pera");
$petar = new Customer("Petar");

$pera->buyProduct($store, "Apple");
sleep(2);
$store->addProduct("Apple");

?>