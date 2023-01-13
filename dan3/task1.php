<?php 

class Email {
  private string $to;
  private string $subject;
  private string $content;

  public function __construct(string $to, string $subject, string $content)
  {
    $this->to = $to;
    $this->subject = $subject;
    $this->content = $content;
  }

  public function getRecipient() { return $this->to; }
}

class EmailFactory{
  public function createEmail(string $to, string $subject, string $content) {
    return new Email($to, $subject, $content);
  }
}

class MailService {
  private static $instance;
  private int $sentEmailCount;

  private function __construct() {
    $this->sentEmailCount = 0;
  }

  public static function getInstance() {
    if(self::$instance == null) {
      self::$instance = new MailService();
    }
    return self::$instance;
  }

  public function getSendEmailCount() { return $this->sentEmailCount; }

  public function sendEmail(Email $email) {
    printf("\nSending email to %s", $email->getRecipient());
    $this->sentEmailCount++;
  }
}

$emailFactory = new EmailFactory();

$loginEmail = $emailFactory->createEmail("pera@pera.com", "Login Success", "You login was successfull.");
$purchaseEmail = $emailFactory->createEmail("test@perta.com", "Purchase Failed", "Not enought balance on your credit cart.");


MailService::getInstance()->sendEmail($loginEmail);
MailService::getInstance()->sendEmail($purchaseEmail);

printf("\nTotal emails sent: %d", MailService::getInstance()->getSendEmailCount());

?>