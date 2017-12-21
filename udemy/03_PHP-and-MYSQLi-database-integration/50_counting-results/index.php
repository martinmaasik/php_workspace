<?php
include('../connecting.php');

/*
$users = $db->query("SELECT * FROM users");
echo $users->num_rows;
*/
/*
$users = $db->query("SELECT COUNT(id) AS count FROM users")->fetch_object();
echo $users->count;
*/
$count = $db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
$countResult = $db->query("SELECT FOUND_ROWS() as count");
var_dump($countResult->fetch_object());

?>
