<?php
include('../connecting.php');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");

echo $users->fetch_object()->email, '<br>';

$users->free();

var_dump($users);


?>
