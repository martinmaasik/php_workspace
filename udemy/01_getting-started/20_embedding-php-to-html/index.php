<?php
error_reporting(0);
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  if (!empty($name)) {
    $sentence = $name.' woke up and made a PHP tutorial.';
  } else {
    echo 'Please enter a name.';
  }
}?>

<html>
<head>

</head>
</body>

<form action="index.php" method="POST">
  Type your name:<br><input type="text" name="name" value="<?=$name?>"><br>
  <input type="submit" value="Submit">
</form>

<textarea rows="7" cols="25"><?= $sentence; ?></textarea>

</body>
</html>
