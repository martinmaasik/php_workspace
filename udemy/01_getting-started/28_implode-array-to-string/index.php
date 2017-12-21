<?php
error_reporting(0);
/*
$names = array('Alex', 'Billy', 'Tabby');

print_r($names);
echo '<br>';

echo implode (', ', $names);
echo '<br>';

$names_str = null;

foreach($names as $key => $name) {
  $names_str .= $name; // lisad $name stringi teisele stringile otsa (mis oli kyll tyhi)
  if ($key != (count($names) -1)) {
    $names_str .= ', '; // lisad koma ka sinna veel eraldi otsa, v.a enne viimast array liiget
  }
}

echo $names_str;
*/

$name = 'alex';
$email = 'alex@phpacademy.org';
$message = 'Really great site, love it!';

$data = array(
  'name'    => $name,
  'email'   => $email,
  'message' => $message,
);

$fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
$values_sql = '\'' . implode('\', \'', $data) . '\'';

// die($fields_sql);

$sql = "
  INSERT INTO `table` ($fields_sql)
  VALUES ($values_sql)
";

echo $sql;














 ?>
