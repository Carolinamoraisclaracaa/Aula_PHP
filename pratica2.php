<?php 

// VARIÁVEIS

$tipo1 = 34;
$tipo2 = "34";
$tipo3 = "Texto";
$tipo4 = 3.60;
$tipo5 = true; //false
$tipo6 = ['dados']; //Array

echo $tipo1;
echo var_dump(is_numeric($tipo2)); // VAI RETORNAR SE VERDADEIRO SE FOR UM TIPO NÚMERICO
echo "</br>";
echo $tipo1 + $tipo2;
echo "</br>";
print $tipo4;
print "</br>";
print $tipo3 . $tipo4;
echo "</br>";
echo $tipo5;
echo "</br>";
echo $tipo6[0];

?>