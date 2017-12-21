<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Task for the year-end</h1>
  <ul>
    <?php foreach ($task as $heading => $value) : ?>
      <li>
        <strong><?= ucwords($heading); ?>: </strong><?=$value; ?>
      </li>
    <?php endforeach; ?>

  </ul>

</body>
</html>
