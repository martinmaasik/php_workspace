<?php
$task = [
  'title' => 'Latvian',
  'due' => 'January',
  'assigned_to' => 'Martin',
  'importance' => 'critical'
];

$task['status'] = false;
// lisasin yhe key-value paari

unset($task['importance']);
// kustutasin yhe key-value paari

var_dump($task);
// see on sisse-ehitatud funktsioon

require 'index.view.php'

?>
