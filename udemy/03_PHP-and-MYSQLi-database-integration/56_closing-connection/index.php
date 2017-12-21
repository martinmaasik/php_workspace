<?php
include('../connecting.php');

$users = $db->query("SELECT * FROM users WHERE id = 1");
echo $users->fetch_object()->email;

$db->close();

echo 'Anything else'













?>
