<?php
/*
  1. Number entered
  2. Upper limit 100
  3. Lower limit 1
  4. Between 1 and 100.

  OR ||
  AND &&
  !

*/
$num = 150;

if ($num>=1 && $num<=100) {
  echo 'Number is fine';
} else {
  echo 'Number must be between 1 and 100, inclusive';
}
echo '<br>------------------------------------------<br>';
$name = 'Alex';
if ($name=='Alex' || $name=='Billy') {
  echo 'Hello there!';
} else {
  echo 'Go away.';
}
echo '<br>------------------------------------------<br>';
$age = 22;
if ($name=='Alex' && ($age==21 || $age==25)) { // teine tingimus eraldi sulgudes
  echo 'Hello there!';
} else {
  echo 'Go away.';
}



 ?>
