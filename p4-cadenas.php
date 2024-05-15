<?php
    $cadena ="el curso a terminado";
    echo "<h1>";
    echo "el texto en Mayuscula ".strtoupper($cadena)."<br>";
    echo "el texto en Minuscula ".strtolower($cadena)."<br>";
    echo "el texto tiene ".strlen($cadena)." caracteres<br>";
    echo "el texto tiene ".
    str_replace("terminado","finalizado",$cadena)."<br>";
    echo "</h1>";


?>