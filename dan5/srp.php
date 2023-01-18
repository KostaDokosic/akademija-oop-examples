<?php 

class Book {
  private string $name;
  private string $author;
  private string $text;

  public function replaceWordInText(string $word, string $replacement) {
    return str_replace($word, $replacement, 1);
  }

  public function isWordInText(string $word) {
    return str_contains($this->text, $word);
  }

  public function printBook() {
    //printing ........
  }
}



?>