<?php

function name() {
  echo 'Martin';
}
name();


echo '<br>-------------------------------------<br>';
function name2 ($name) {
  echo $name;
}
name2('Matu');


echo '<br>-------------------------------------<br>';
function name3 ($name3) {
  return 'My name is '.$name3;
}
$returnvalue = name3('Dale');
echo $returnvalue;


echo '<br>-------------------------------------<br>';
function add($num1, $num2) {
  $result = $num1 + $num2;
  echo $result;
  return $result; // see ei anna midagi siin juurde
}

add(10, 30);

echo '<br>-------------------------------------<br>';
function add2($num1, $num2) {
  $result = $num1 + $num2;
  return $result;
}

echo add2(10, 30);

echo '<br>-------------------------------------<br>';
function add3($num1, $num2) {
  $result = $num1 + $num2;
  // siin oleks returni vaja, muidu ei prindi
}

echo add3(10, 30);

 ?>
