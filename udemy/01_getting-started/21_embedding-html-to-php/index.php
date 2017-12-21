<?php
error_reporting(0);

$name = "Martin";

if ($name=="Martin") {
  echo "Hi, Martin.";
} else {?>
  You're not Alex? Please type your name:<br />
  <form action="index.php" method="POST"><input type="text" name="name"> <input type="submit" value="Submit">
  </form>
<?php
}
?>
