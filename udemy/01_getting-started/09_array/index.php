<?php
$names = array('Martin','Erki','Mihkel');
echo "$names<br>"; // ei toimi
print_r($names); // toimib
echo '<br>';
echo $names[2]; //indeksi positsioonil 2. (loendad alates 0st)
echo '<br>';
$names = array('Martin'=>23, 'Erki'=>22, 'Mihkel'=>23);
print_r($names);
echo '<br>';
$names['Margus']=27; //lisan arraysse uue eseme (nii saab ka muuta)
print_r($names);
echo '<br>';
echo $names['Mihkel']; //positsioonil / v6tmel nimega 'mihkel' on v22rtus 23
echo '<br>';
// kui tahad kogu array n-9 v2lja printida siis kasutad for eachi (jutuks hiljem)
 ?>
