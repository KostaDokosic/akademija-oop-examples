<?php 

class SqlDatabase {
  protected function writeSomething() {
    echo "SQL is faster?";
  }
}

class NoSqlDatabase extends SqlDatabase {
  protected function writeSomething() {
    echo "NoSql is better?";
  }
}

class Row extends SqlDatabase {
  public function write() {
    parent::writeSomething();
  }
}

$row = new Row(3);
$row->write();

?>