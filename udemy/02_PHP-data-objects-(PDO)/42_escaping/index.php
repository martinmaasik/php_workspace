<?php
ini_set('display_errors', 'On');
try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if (!empty($_GET['user'])) {
  $userId = $db->quote($_GET['user']); // v6i $userId = (int) $_GET['user'];
  $user = $db->query("SELECT * FROM users WHERE id = {$userId}");
  var_dump($user->fetchObject());
}


 ?>
