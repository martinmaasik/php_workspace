<?php
$lastWeek = date("d.m.Y", strtotime("last week monday")).' - '.date("d.m.Y", strtotime("last week sunday"));
$thisWeek = date("d.m.Y", strtotime("this week monday")).' - '.date("d.m.Y", strtotime("this week sunday"));

$lastWeekStart = date("Y-m-d", strtotime("last week monday"));
$thisWeekStart = date("Y-m-d", strtotime("this week monday"));
$lastWeekEnd = date("Y-m-d", strtotime("last week sunday"));
$thisWeekEnd = date("Y-m-d", strtotime("this week sunday"));

?>
