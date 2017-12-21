<?php

// ==
// != on sama mis <>
// < > <= >=
$nimi = 'Martin';
$vanus = '23';
if ($nimi=='martin'){
  echo 'OK.';
} else {
  echo 'vale nimi';
}
echo '<br>-------------------------------------<br>';
$age = 21;
$status = false;

if ($age>=21) {
  $status = true;
}
if ($status==true) {
  echo 'You\'re allowed.';
} else if ($status==false) {
  echo 'Sorry, not allowed.';
}

 ?>
