<?php
ini_set('display_errors', 'On');
try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
if (!empty($_GET['user'])) {
  $user = $db->prepare("SELECT * FROM users WHERE id = :user_id");
  $user->execute([
    'user_id' => $_GET['user'],
  ]);
  var_dump($user->fetchObject());
}

 ?>
