<?php
include('../connecting.php');

$user = $db->query("SELECT * FROM users WHERE id = 1");

echo '<pre>', var_dump($user), '</pre>';

$user = $user->fetch_assoc();

echo '<pre>', var_dump($user), '</pre>';

echo $user['email'];
 ?>
