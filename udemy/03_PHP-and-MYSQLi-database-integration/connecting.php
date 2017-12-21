<?php
error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'mysqli');

if ($db->connect_errno !== 0) {
  die('There is a problem with connecting');
}

?>
