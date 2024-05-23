<?php

    include("p15-polimorfismo.php");

    echo "area de triangulo\n";
    echo "ingrese la base :";
    $b=fgets(STDIN);
    echo "ingrese la altura :";
    $h=fgets(STDIN);
    $triangulo = new Triangulo($b,$h);
    $area=$triangulo->calcularArea();
    echo "el area del triangulo es ".$area;

    echo "\narea de rectangulo\n";
    echo "ingrese la base :";
    $b=fgets(STDIN);
    echo "ingrese la altura :";
    $a=fgets(STDIN);
    $rectangulo = new Rectangulo($b,$a);
    $area=$rectangulo->calcularArea();
    echo "el area del rectangulo es ".$area;

    echo "\narea de cuadrado\n";
    echo "ingrese he lado :";
    $l=fgets(STDIN);
    $cuadrado = new Cuadrado($l);
    $area=$cuadrado->calcularArea();
    echo "el area del cuadrado es ".$area;

    echo "\narea de circulo\n";
    echo "ingrese he radio :";
    $l=fgets(STDIN);
    $circulo = new Circulo($l);
    $area=$circulo->calcularArea();
    echo "el area del circulo es ".$area;

?>