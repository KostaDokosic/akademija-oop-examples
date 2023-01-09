<?php 

class BankAccount {
  protected float $money;
  protected bool $isBlocked = false;

  public function getMoney() { return $this->money; }
  public function setMoney(float $money) { return $this->money = $money; }

  public function isAccountBlocked() { return $this->isBlocked; }
  public function setBlocked(bool $blocked) { $this->isBlocked = $blocked; }

  public function deposit(float $money) {
    $this->money += $money;
    printf("\nDeposit success. Current balance: %f", $this->money);
    if($this->isAccountBlocked() && $this->money >= 0) {
      $this->setBlocked(false);
      echo("\nAccount is now unblocked!");
    }
  }
  public function withdraw(float $money) {
    if($this->isAccountBlocked()) {
      echo("Bank acccount is blocked");
    } else {
      $this->money -= $money;
      printf("\nWithdraw success. Current balance: %f", $this->money);
      if($this->money <= -200) {
        $this->setBlocked(true);
        echo("\nAccount is blocked because balance is too low!");
      }
    }
  }
}

class User {
  private string $firstName;
  private string $lastName;
  private BankAccount $account;

  public function __construct(string $firstName, string $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->account = new BankAccount();
    $this->account->setMoney(0);
  }

  public function getName() {
    return "{$this->firstName} {$this->lastName}";
  }

  public function bankAccount() { return $this->account; }

  public function balance() {
    printf("\nCurrent balance: %f", $this->bankAccount()->getMoney());
  }
}

$myUser = new User('Pera', 'Peric');
var_dump($myUser->getName());
$myUser->balance();

$myUser->bankAccount()->deposit(100);

$myUser->bankAccount()->withdraw(300);

$myUser->bankAccount()->deposit(100);

echo "\n";
$myUser->bankAccount()->withdraw(100);

$myUser->bankAccount()->deposit(500);


?>