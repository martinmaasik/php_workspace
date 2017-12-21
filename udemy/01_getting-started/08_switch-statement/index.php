<?php

$num = 1;
// switch statement is an easier and quicker way to make more comparisons
switch ($num) {
  case 10:
  echo 'Ten';
  break;
  case 9:
  echo 'Nine';
  break;
  case 8:
  echo 'Eight';
  break;
  default: // pole kohustuslik
  echo 'Number not recognized';
  break;
}
echo '<br>------------------------------------------<br>';
// pole kohustust kohe breakida, v6ib olla ka mitu case mille korral midagi teed.
$name = 'Martin';
switch ($name) {
  case 'Martin':
  case 'Erki':
  case 'Mihkel':
    echo 'tule sisse, noormees';
  break;
}


 ?>
