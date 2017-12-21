<?php
$num = 1;
$names = array('Alex','Billy','Dale');

foreach ($names as $name) {
  echo 'Name '.$num.' is '.$name.'<br>';
  $num++;
}
echo '<br>';
$names = array('Alex'=>21,'Billy'=>16,'Dale'=>49);

foreach ($names as $name=>$age) {
  echo $name.' is '.$age.' years old.<br>';
}
 ?>
