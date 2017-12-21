<?php
ini_set('display_errors', 'On');
try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$users = $db->query("
  SELECT * FROM users
");

/*
$users = $users->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>', var_dump($users), '</pre>';
foreach ($users as $user) {
  echo $user['email'], '<br>';
}*/

$users = $users->fetchAll(PDO::FETCH_OBJ);
// echo '<pre>', var_dump($users), '</pre>';

foreach ($users as $user) {
  echo $user->email, '<br>';
}
