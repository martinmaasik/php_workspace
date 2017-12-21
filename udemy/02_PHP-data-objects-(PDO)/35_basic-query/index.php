<?php

ini_set('display_errors', 'On');

try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// var_dump($db); tegemist on objektiga - j2relikult on igast methodid
// mis kaasas k2ivad

$db->query("
  UPDATE users
  SET last_name = 'Smith'
  WHERE id = 2
");
// kogu selle v6iks panna v6rduma muutujaga ja siis teha var-dump $updateUser
// teeks sama v2lja

/*
$sql = "UPDATE `users`
       SET `last_name` = :last_name;
      ";

 $statement = $db->prepare($sql);
 $statement->bindValue(":last_name", 'smith222');
 $count = $statement->execute();
 var_dump($count);

// $updateUser = $db->query("
//   SELECT * FROM PDO.users
// ");
*/


 ?>
