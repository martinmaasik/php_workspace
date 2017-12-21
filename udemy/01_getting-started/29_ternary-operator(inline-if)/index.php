<?php
error_reporting(0);
$age = 16;
/*
$old_enough = false;
if ($age >= 18) {
  $old_enough = true;
}

if ($old_enough === true) {
  echo 'Old enough';
} else {
  echo 'Not old enough';
}
*/

$old_enough = ($age >= 18) ? true : false;
echo ($old_enough === true) ? 'Old enough' : 'Not old enough'

 ?>
