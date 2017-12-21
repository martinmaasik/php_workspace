<?php

class Task {
  // the parameters
  public $description;
  public $completed = false;
  // function inside a class is called a method
  public function __construct($description) {
    $this->description = $description;
  }
  public function complete() {
    $this->completed = true;
  }
  public function isComplete() {
    return $this->completed;
  }
}

$tasks = [
  new Task ('Go to the store'),
  new Task ('Finish reading book'),
  new Task ('Clean livingroom'),
];

$tasks[0]->complete();

require 'index.view.php';
?>
