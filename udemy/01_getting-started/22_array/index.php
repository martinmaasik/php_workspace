<?php
error_reporting(0);
$GLOBALS['level'] = array(
  1 => array(
    'name' => 'Level 1',
    'desc' => 'This is the first level'
  ),
  2 => array(
    'name' => 'Level 2',
    'desc' => 'You\'ve made it to level 2'
  ),
  3 => array(
    'name' => 'Level 3',
    'desc' => 'The last level'
  )
);

// $levels[4]['name'] = 'Level 4';
/*
function level_data($level, $data) {
  if (array_key_exists($level, $GLOBALS['level'])===true) {
    return $GLOBALS['level'][$level][$data];
  } else {
    return false;
  }
}
echo level_data(1, 'name')
*/


//echo level_data(1, 'desc');

echo '<pre>', print_r($GLOBALS, true), '</pre>';


/*
var_dump($levels);
print_r($levels);
*/


 ?>
