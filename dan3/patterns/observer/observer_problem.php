<?php

// Imagine that you have two types of objects: a Customer and a Store. The customer is very interested in a particular brand of product (say, it’s a new model of the iPhone) which should become available in the store very soon.

// The customer could visit the store every day and check product availability. But while the product is still en route, most of these trips would be pointless.

// On the other hand, the store could send tons of emails (which might be considered spam) to all customers each time a new product becomes available. This would save some customers from endless trips to the store. At the same time, it’d upset other customers who aren’t interested in new products.

// It looks like we’ve got a conflict. Either the customer wastes time checking product availability or the store wastes resources notifying the wrong customers.

class Customer {
  public function __construct() {}

  public function goToStoreAndGetProduct(Store $store, Product $product) {
    if($store->hasProduct($product)) {
      echo "\nI got my product";
    } else {
      echo "\nProduct is not delivered yet :(";
    }
  }
}

class Product {
  public bool $delivered;

  public function __construct() {
    $this->delivered = false;
  }
}

class Store {
  public $products;

  public function __construct() {
    $this->products = [];
  }

  public function hasProduct(Product $product) {
    if(in_array($product, $this->products) && $product->delivered) {
      return true;
    }
    return false;
  }
}

$me = new Customer();
$store = new Store();
$apple = new Product();

$me->goToStoreAndGetProduct($store, $apple);

$store->products[] = $apple;
$me->goToStoreAndGetProduct($store, $apple);

sleep(1);
$me->goToStoreAndGetProduct($store, $apple);

sleep(1);
$me->goToStoreAndGetProduct($store, $apple);

sleep(1);
$me->goToStoreAndGetProduct($store, $apple);

$apple->delivered = true;
sleep(1);
$me->goToStoreAndGetProduct($store, $apple);


?>