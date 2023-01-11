<?php

class Author {
  private string $firstName;
  private string $lastName;
  private string $email;
  private string $date;

  public function __construct(string $firstName, string $lastName, string $email, string $date)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->date = $date;
  }

  public function getName() {
    return "{$this->firstName} {$this->lastName}";
  }

  public function getEmail() { return $this->email; }
  public function getDate() { return $this->date; }
}

class Book {
  private string $name;
  private Author $author;
  private float $price;
  private int $pageNumber;
  private int $amount;

  public function __construct(string $name, Author $author, float $price, int $pageNumber, int $amount = 1)
  {
    $this->name = $name;
    $this->author = $author;
    $this->price = $price;
    $this->pageNumber = $pageNumber;
    $this->amount = $amount;
  }

  public function getAuthor() { return $this->author; }
  public function getPrice() { return $this->price; }
  public function getPageNumber() { return $this->pageNumber; }
  public function getAmount() { return $this->amount; }
  public function getName() { return $this->name; }

  public function setAmount(int $amount) {
    $this->amount = $amount;
  }
}

class Library {
  private $books;
  private float $cash;

  public function __construct()
  {
    $this->books = [];
    $this->cash = 0;
  }

  public function addBook(Book $book) {
    if(in_array($book, $this->books)) {
      $book->setAmount($book->getAmount() + 1);
    } else {
      $this->books[] = $book;
      $book->setAmount(1);
    }
    printf("\n Kniga %s je dodata u biblioteku. Trenutna kolicina: %d", $book->getName(), $book->getAmount());
  }

  public function sellBook(Book $book) {
    if(in_array($book, $this->books) && $book->getAmount() > 0) {
      $book->setAmount($book->getAmount() - 1);
      printf("\nKjiga %s uspesno prodata. Trenutno stanje: %d", $book->getName(), $book->getAmount());
      $this->cash += $book->getPrice();
      printf("\nTrenutno stanje u kasi: %d", $this->cash);
    } else {
      printf("\nTrenutno nemamo knjigu %s na stanju!", $book->getName());
    }
  }

  public function findBook(string $name) {
    $targetBook = false;
    foreach ($this->books as $book) {
      if($book->getName() === $name) {
        $targetBook = $book;
        break;
      }
    }
    return $targetBook;
  }

  public function bookInfo(Book $book) {
    printf("\n===============");
    printf("\nName: %s", $book->getName());
    printf("\nAuthor %s", $book->getAuthor()->getName());
    printf("\nEmail %s", $book->getAuthor()->getEmail());
    printf("\n===============");
  }
}


$author = new Author("George R.", "Martin", "georger@martin.com", "12.12.1965.");
$harryPotter  = new Book("Harry Potter ", $author, 100, 1240, 10);
$gameOfThrones = new Book("Game of Thrones", $author, 100, 1240, 10);

$library = new Library();
$library->sellBook($gameOfThrones);
$library->addBook($gameOfThrones);
$library->addBook($harryPotter);
$library->sellBook($gameOfThrones);
$library->sellBook($gameOfThrones);

$library->bookInfo($gameOfThrones);

echo "\n";
var_dump($library->findBook("Game of Thrones"));

?>