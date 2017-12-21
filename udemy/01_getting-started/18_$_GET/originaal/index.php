<form action="index.php" method="GET">
  Name:<br><input type="text" name="name"><br>
  Age:<br><input type="text" name="age" size="5"><br><br>
  <input type="submit" value="Submit">
</form>

<?php
function submission() {
  $name = $_GET['name'];
  $age = $_GET['age'];
  if (empty($name) && empty($age)) {
  echo 'Please set your name and age.';
  } else if (empty($name)) {
  echo 'Your age is '.$age.'. Please set your name.';
  } else if (empty($age)) {
  echo 'Your name is '.$name.'. Please set your age.';
  } else {
  echo 'Your name is '.$name.' and your age is '.$age.'.';
  }
}

while (empty($name) || empty($age)) {
  return submission();
}
?>
