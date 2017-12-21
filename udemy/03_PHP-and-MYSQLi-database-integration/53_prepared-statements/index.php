<?php
include('../connecting.php');

if (!empty($_POST)) {
  $email = ($_POST['email']);
  $firstName = ($_POST['first_name']);
  $lastName = ($_POST['last_name']);

  $prepared = $db->prepare("
  INSERT INTO users (email, first_name, last_name, created)
  VALUE (?, ?, ?, NOW())
  ");
  $prepared->bind_param('sss', $email, $firstName, $lastName);

  // $prepared->bind_param('s', $email);
  // $prepared->bind_param('s', $firstName);
  // $prepared->bind_param('s', $lastName);

  $prepared->execute();

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
