<?php

ini_set('display_errors', 'On');
$db = new PDO('mysql:localhost;dbname=PDO', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// errmode saab olla ka SILENT ja  WARNING

try {
  $db->query("INVALID");
} catch (PDOException $e) {
  var_dump($e->getMessage());
}










 ?>
