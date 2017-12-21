<?php
$num = 25123000.1234567;
echo 'I have &pound;', number_format($num, 2).'<br>';
echo 'I have &pound;', number_format($num, 2, 'koma', 'vahe');
