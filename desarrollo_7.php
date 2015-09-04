<?php
 if (isset($_POST['Km'])){
$x=$_POST['Km'];
$lg=16.4;
$c=0;

$c=$x/$lg;

echo "El total de los litros que consume es: ".  round ($c) ." litro(s)";
 }
?>