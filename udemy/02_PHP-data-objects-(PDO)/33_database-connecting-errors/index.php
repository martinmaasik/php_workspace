<?php
// var_dump(PDO::getAvailableDrivers());
ini_set('display_errors', 'On');
try {
  $db = new PDO('mysql:localhost;dbname=PDO', 'root', '');
} catch (PDOException $e) {
  var_dump($e->getMessage());
}

 ?>
