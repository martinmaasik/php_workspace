<?php
ini_set('display_errors', 'On');
class User // v6iks olla eraldi failis
{
  public function getFullName()
  {
    return "{$this->first_name} {$this->last_name}";
  }
}
try {
    $db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$users = $db->query("
  SELECT * FROM users
");

$users->setFetchMode(PDO::FETCH_CLASS, 'User');
// $users = $users->fetch();
// echo '<pre>', var_dump($users), '</pre>';
while ($user = $users->fetch()) {
  echo $user->getFullName(), '<br>';
}




 ?>
