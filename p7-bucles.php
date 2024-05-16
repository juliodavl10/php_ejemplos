<?php

$contador=1;
$sumanotas=0;
while($contador<=3){
    echo "ingrese sus notas : ";
    $nota = fgets(STDIN);
    $sumanotas = $sumanotas + $nota;
    $contador++;
}
$notapromedio = $sumanotas/3;
echo "\n El promedio de notas es : ".$notapromedio."\n";
for ($i = 1; $i <= 5; $i++){
    echo "ingrese un numero : ";
    $numero = fgets(STDIN);
    if ($mayor < $numero){
        $mayor = $numero;
    }
}
echo "el numero mayor es : ".$mayor;

?>