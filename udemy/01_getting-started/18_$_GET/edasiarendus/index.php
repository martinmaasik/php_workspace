<?php
function submission() {
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  }
  if (isset($_GET['name'])) {
  $age = $_GET['age'];
  }
  if (empty($name) && empty($age)) {
    echo 'Please set your name and age.'; ?>
    <form action="index.php" method="GET">
      <br>Name:<br><input type="text" name="name"><br>
      Age:<br><input type="text" name="age" size="1"><br><br>
      <input type="submit" value="Submit">
    </form> <?php
  } else if (empty($name)) {
    echo 'Your age is '.$age.'. Please set your name.'; ?>
    <form action="index.php" method="GET">
      <br>Name:<br><input type="text" name="name"><br>
      Age:<br><input type="text" name="age" size="1" value=<?php echo ($_REQUEST['age']);?>><br><br>
      <input type="submit" value="Submit">
    </form> <?php
  } else if (empty($age)) {
    echo 'Your name is '.$name.'. Please set your age.'; ?>
    <form action="index.php" method="GET">
      <br>Name:<br><input type="text" name="name" value=<?php echo ($_REQUEST['name']);?>><br>
      Age:<br><input type="text" name="age" size="1"><br><br>
      <input type="submit" value="Submit">
    </form> <?php
  } else {
    echo 'Your name is '.$name.' and your age is '.$age.'.'; ?>
<!--<form action="index.php" method="GET">
      <br>Name:<br><input type="text" name="name" value=<?php echo ($_REQUEST['name']);?>><br>
      Age:<br><input type="text" name="age" size="3" value=<?php echo ($_REQUEST['age']);?>><br><br>
      <input type="submit" value="Submit">
    </form>-->

    <?php
  }
}

while (empty($name) || empty($age)) {
  return submission();
}
?>
