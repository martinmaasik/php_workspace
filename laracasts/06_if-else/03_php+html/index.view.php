<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Task for the year-end</h1>
  <ul>
    <li>
      <strong>Name: </strong> <?= $task['title']; ?>
    </li>
    <li>
      <strong>Due date: </strong> <?= $task['due']; ?>
    </li>
    <li>
      <strong>Person Responsible: </strong> <?= $task['assigned to']; ?>
    </li>
    <li>
      <strong>Status: </strong>
      <?php if ($task['completed']) : ?>
        <span class="icon">&#10003</span>
      <?php else : ?>
        <span class="icon">&#10005</span>
      <?php endif; ?>
    </li>
  </ul>

</body>
</html>
