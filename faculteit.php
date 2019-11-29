<?php
$j;
$getal;
$result;
echo "Van welk getal wil je de faculteit weten?";
$getal = readline();
BerekenFaculteit($getal);
function BerekenFaculteit($getal)
{
    $result = 1;
    echo "\n" . "\n" . "\n";
    for ($j = 1; $j < $getal; $j++)
    {
      echo $j . ' x ';
      $result = $result * ($j + 1);
    }
    echo $j . ' = ' . $result;
    echo "\n" . "\n" . "\n";
}
 ?>
