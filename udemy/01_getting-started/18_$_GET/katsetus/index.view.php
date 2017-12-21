<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php midaiganes(); ?>
  <?php if (empty($name) && empty($age)) : ?>
    <?= 'Please enter your name and your age.'; ?>
    <form action="index.php" method="GET">
    <br>Name:<br><input type="text" name="name"><br>
    Age:<br><input type="text" name="age" size="5"><br><br>
    <input type="submit" value="Submit">
    </form>
  <?php elseif (empty($name)) : ?>
    <?= 'Your age is '.$age.'. Please enter your name.'; ?>
    <form action="index.php" method="GET">
    <br>Name:<br><input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
    </form>
  <?php elseif (empty($age)) : ?>
    <?= 'Your name is '.$name.'. Please enter your age.'; ?>
    <form action="index.php" method="GET">
    <br>Age:<br><input type="text" name="age" size="5"><br><br>
    <input type="submit" value="Submit">
    </form>
  <?php else : ?>
    <?= 'Your name is '.$name.' and your age is '.$age; ?>
  <?php endif; ?>


</body>
</html>
