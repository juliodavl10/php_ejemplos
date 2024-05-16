<?php

echo "Ingrese una letra entre estos____\n
1 = R = ROJO\n
2 = V = VERDE\n
3 = A = AMARILLO\n 
Ingrese una letra(escriba en minuscula):";
$a = trim(fgets(STDIN));


if ($a == 'r' || $a == '1' || $a == 'R' || $a == 'ROJO' || $a == 'Rojo' || $a == 'rojo' || $a == 'PARA' || $a == 'Para' || $a == 'para')
echo "¡¡para!!\n";
elseif ($a == 'v' || $a == '2' || $a == 'V' || $a == 'VERDE' || $a == 'Verde' || $a == 'verde' || $a == 'AVANZA' || $a == 'Avanza' || $a == 'avanza') {
    echo "¡¡avanza!!\n";
}
elseif ($a == 'a' || $a == '3' || $a == 'A' || $a == 'AMARILLO' || $a == 'Amarillo' || $a == 'amarillo' || $a == 'ESPERE' || $a == 'Espere' || $a == 'espere'){
    echo "¡¡espere!!\n";
}
else
echo "ingrese algo que sea vaido "


?>