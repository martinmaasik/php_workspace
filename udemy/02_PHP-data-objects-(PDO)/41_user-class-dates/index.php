<?php
ini_set('display_errors', 'On');
class User // v6iks olla eraldi failis
{
  protected $dates = [
    'created', // need peavad k6ik olema databases olemas,
    'last seen', // muidu on undefined property
  ];
  public function __construct()
  {
    foreach ($this->dates as $date) {
      $property = $this->{$date};
      $this->{$date} = new DateTime($property);
    }
  }
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

//echo '<pre>', var_dump($users->fetch()), '</pre>';
//die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PDO</title>
</head>
<body>
  <?php while ($user = $users->fetch()): ?>
    <div class="user">
      <h4><?= $user->getFullname(); ?></h4>
      <p>Registered on <?= $user->created->format('d M Y h:i:s'); // t2nu sellele et oli klassi-siseselt tehtud siis sai nii formatida ?></p> 
    </div>
  <?php endwhile; ?>
</body>
</html>
