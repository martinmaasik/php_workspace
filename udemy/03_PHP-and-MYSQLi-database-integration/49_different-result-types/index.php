<?php
include('../connecting.php');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");

$users = $users->fetch_array();
echo $users['email'], '<br>';
echo $users[0];

/*
while ($row = $users->fetch_object()) {
  echo '<pre>', var_dump($row), '</pre>';
  echo $row->email, '<br>';
}
*/
/*
$users = $users->fetch_object();
echo '<pre>', var_dump($users), '</pre>';
$users->age = 25;
echo '<pre>', var_dump($users), '</pre>';
*/
 ?>
