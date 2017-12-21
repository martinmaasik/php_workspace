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
// echo var_dump($users->fetch(PDO::FETCH_ASSOC)['email']);

/* $users = $users->fetch(PDO::FETCH_ASSOC);
echo $user['email'];
*/

echo '<pre>', var_dump($users->fetchAll(PDO::FETCH_ASSOC)), '</pre>'



 ?>
