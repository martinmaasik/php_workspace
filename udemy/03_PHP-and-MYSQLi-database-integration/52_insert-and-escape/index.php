<?php
include('../connecting.php');

if (!empty($_POST)) {
  $email = $db->escape_string($_POST['email']);
  $firstName = $db->escape_string($_POST['first_name']);
  $lastName = $db->escape_string($_POST['last_name']);
  $insert = $db->query("
    INSERT INTO users (email, first_name, last_name, created)
    VALUES ('{$email}', '{$firstName}', '$lastName', NOW())
  ");

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>MySQLi</title>
  </head>
  <body>
    <form action="index.php" method="post" autocomplete="off">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="first_name" placeholder="First name">
      <input type="text" name="last_name" placeholder="Last name">
      <input type="submit" value="Sign up">
    </form>
  </body>
</html>
