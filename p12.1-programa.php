<?php

include("p12-clase.php");

echo "********** BIENVENIDO A MI CALCULADORA **********\n";
echo "********** MENU DE OPCIONES            **********\n";
echo "********** SUMAR (OPCION 1)            **********\n";
echo "********** RESTAR (OPCION 2)           **********\n";
echo "********** MULTIPLICAR (OPCION 3)      **********\n";
echo "********** DIVIDIR (OPCION 4)          **********\n";
echo "********** POTENCIA (OPCION 5)         **********\n";
echo "********** RAIZ (OPCION 6)             **********\n";
echo "********** SALIR (OPCION 0)            **********\n";
echo "ingrese una opcion :";
$opcion = fgets(STDIN);
switch ($opcion){
    case 1:
        echo "********** ESCRIBA EL PRIMER NUMERO **********\n";
        $numero1 = fgets(STDIN);
        echo "********** ESCRIBA EL SEGUNDO NUMERO **********\n";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->sumar();
        echo "********** LA SUMA ES: ".$resultado." **********\n";
        break;
    case 2:
        echo "********** ESCRIBA EL PRIMER NUMERO **********\n";
        $numero1 = fgets(STDIN);
        echo "********** ESCRIBA EL SEGUNDO NUMERO **********\n";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->restar();
        echo "********** LA RESTA ES: ".$resultado." **********\n";
        break;
    case 3:
        echo "********** ESCRIBA EL PRIMER NUMERO **********\n";
        $numero1 = fgets(STDIN);
        echo "********** ESCRIBA EL SEGUNDO NUMERO **********\n";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->multiplicar();
        echo "********** LA MULTIPLICACION ES: ".$resultado." **********\n";
        break;
    case 4:
        echo "********** ESCRIBA EL PRIMER NUMERO **********\n";
        $numero1 = fgets(STDIN);
        echo "********** ESCRIBA EL SEGUNDO NUMERO **********\n";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->dividir();
        echo "********** LA DIVISION ES: ".$resultado." **********\n";
        break;  
    case 5:
        echo "********** ESCRIBA EL PRIMER NUMERO **********\n";
        $numero1 = fgets(STDIN);
        echo "********** ESCRIBA EL SEGUNDO NUMERO **********\n";
        $numero2 = fgets(STDIN);
        $calculadora = new calculadora($numero1,$numero2);
        $resultado = $calculadora->potencia();
        echo "********** LA POTENCIA ES: ".$resultado." **********\n";
        break;
    case 6:
        echo "********** ESCRIBA EL PRIMER NUMERO **********\n";
        $numero1 = fgets(STDIN);
        $calculadora = new calculadora($numero1);
        $resultado = $calculadora->raiz();
        echo "********** LA RAIZ ES: ".$resultado." **********\n";
        break;
    case 0;
        echo "fin";
        break;
    default:
        echo "no";
        break;
}



?>