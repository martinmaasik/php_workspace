<?php
error_reporting(0);
$likes = 'eating,drinking,the gym,nothing';
$likes = explode(',', $likes);

// print_r($likes); see on array
foreach ($likes as $key => $like) {
  echo $like, ' at position ', $key, '<br>';
}







 ?>
