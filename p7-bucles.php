<?php

$contador = 1;
$totalNotes = 0;
$menor1 = PHP_INT_MAX; 
$mayor1 = PHP_INT_MIN; 

while ($contador <= 3) {
    echo "Ingrese sus notas: ";
    $note = fgets(STDIN);
    $totalNotes += $note;
    $contador++;
}
$notapromedio = $totalNotes / 3;
echo "\nEl promedio de notas es: $notapromedio\n";

for ($i = 1; $i <= 5; $i++) {
    echo "Ingrese un número: ";
    $number = fgets(STDIN);
    if ($number > $mayor1) {
        $mayor1 = $number;
    }
    if ($number < $menor1) {
        $menor1 = $number;
    }
}
echo "El número mayor es: $mayor1\n";
echo "El número menor es: $menor1\n";
?>