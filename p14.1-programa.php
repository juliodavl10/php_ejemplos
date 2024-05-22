<?php
include("p14-herencia.php");
echo "EJEMPLO DE HERENCIA CON ANIMALES\n";
$perro = new Perro ("Coimita", "Verde", true,"small-dog-barking-84707.mp3");
echo $perro->obtenerInformacion()."\n";
echo $perro->hacerSonido();
?>