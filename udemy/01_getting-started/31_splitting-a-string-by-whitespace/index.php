<?php
error_reporting(0);

$string = trim(     'Blue    car'      ); //koristab eest ja tagant ara tyhikud
// $keywords = explode(' ', $string); kui pole ebvajalikke speisse
$keywords = preg_split('/[\s]+/', $string);
print_r($keywords);


 ?>
