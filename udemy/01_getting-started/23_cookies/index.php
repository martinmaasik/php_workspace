<?php
error_reporting(0);

$exp = time() +86400; // sekundite arv p2evas
$exp_unset = time() -86400;
/*
setcookie("name", "Alex", $exp);
setcookie("age", 19, $exp);
echo $_COOKIE["name"];
echo $_COOKIE["age"];
print_r($_COOKIE);
*/

setcookie("name", "", $exp_unset);

if (isset($_COOKIE['name'])) {
  echo 'cookie is set';
} else {
  echo 'cookie is not set';
}

?>
