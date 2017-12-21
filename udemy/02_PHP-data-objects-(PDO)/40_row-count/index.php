<?php
ini_set('display_errors', 'On');
try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
/*
$users = $db->query("
  SELECT count(id) AS count FROM users
");
echo $users->fetchObject()->count;
*/
echo $db->query("SELECT * FROM users")->rowCount();
// kogu see huinjaa olemata ja n2itab kohe counti, tuutoril
// meeldib k6ike hirmsasti eraldi muutujatesse panna



 ?>
