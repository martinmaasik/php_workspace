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
while ($user = $users->fetchObject()) {
  echo $user->email, '<br>';
}
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PDO</title>
  </head>
  <body>
    <?php while ($user = $users->fetchObject()): ?>
      <div class="user">
        <h4><?php echo $user->first_name; ?></h4>
        <p><?php echo $user->email; ?></p>
      </div>
    <?php endwhile; ?>
  </body>
</html>
