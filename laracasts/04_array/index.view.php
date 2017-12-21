<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <title>Document</title>
  <style>
    header {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
  <ul>
    <?php foreach ($loomad as $loom) :?>
      <li><?=$loom; ?></li>
    <?php endforeach; ?>
    <?php
      foreach ($loomad as $loom) {
        echo "<li>$loom</li>";
        }
    ?>
  </ul>
</body>
</html>
