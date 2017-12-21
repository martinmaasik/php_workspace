<?php
error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'mysql'); // siia asemele db nimi mis ei eksisteeri

if ($db->connect_errno !== 0) {
  die('We are down at the moment.');
} else {
  echo('All is OK.');
}

 ?>
