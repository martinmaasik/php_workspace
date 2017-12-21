<?php
ini_set('display_errors', 'On');
$db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

if (!empty($_POST)) {
  $email = $_POST['email'];
  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];

  $user = $db->prepare("
    INSERT INTO users (email, first_name, last_name)
    VALUES (:email, :first_name, :last_name)
  ");
  $result = $user->execute([
    'email' => $email,
    'first_name' => $firstName,
    'last_name' => $lastName,
  ]);
  $userID = (int) $db->lastInsertID();
  var_dump($userID);
  die();

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PDO</title>
  </head>
  <body>
    <form action="index.php" method="post" autocomplete="off">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="first_name" placeholder="First name">
      <input type="text" name="last_name" placeholder="Last name">
      <input type="submit" value="Register">
    </form>
  </body>
</html>
