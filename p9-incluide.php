<?php
include 'p9.1-libreria.php';
echo "ingrese el primer numero :";
$numero1=fgets (STDIN);
echo "ingrese el segundo numero :";
$numero2=fgets (STDIN);
$resultado = multiplicar ($numero1, $numero2);
echo "El producto de ".$numero1." x ".$numero2." es ".$resultado;
$resultado = dividir ($numero1, $numero2);
echo "\n El producto de ".$numero1." / ".$numero2." es ".$resultado;
?>