<?php
// n2ide tavalisest funktsioonist
function add($num1, $num2) {
  $total = $num1 + $num2;
  return $total;
}
echo add(5, 10);

echo '<br>-----------------------------<br>';


function add2() {
  $total = 0;
  foreach(func_get_args() as $arg) {
    $total += (int)$arg; // $total = $total + $arg;
  }
  return $total;
}

echo add2(5, 10, 1).'<br>';
echo add2(242, 23, 2, 663, 0, 2);

echo '<br>-----------------------------<br>';

function append1($initial1) {
  $result1 = '';
  foreach(func_get_args() as $key1 => $arg1) {
    echo $key1;
  }
}
echo append1('Martin', 'Maasik');

echo '<br>-----------------------------<br>';

function append($initial) {
  $result = func_get_arg(0);
  foreach(func_get_args() as $key => $value) {
    if ($key >= 1) {
      $result .= ' ' . $value;
    }
  }
  return $result;
}
echo append ('Martin', 'Maasik', 'Mihkel')
 ?>
