<?php

$number = 10;

if ($number>50) {
  echo 'on suurem kui 50';
} else {
  echo 'ei ole suurem kui 50';
}

echo '<br>--------------------------------------<br>';
$number = 10;
$number2 = '10';
if ($number==$number2) {
  echo "equal<br>";
}
if ($number===$number2) {
  echo 'equal';
} else {
  echo 'not equal';
}
//triple equal votab arvesse formaati.
 ?>
