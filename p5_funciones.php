<?php

function obtenersaludo($parametro){
    return "hola como estas " .$parametro;
}
function mostrardatos($nombre,$apellido,$curso,$semestre){
    $mensaje = "hola soy ".$nombre." ".$apellido." del curso de ".$curso." en el ".$semestre;
    return $mensaje;
}

echo obtenersaludo("julio")."\n";
echo mostrardatos("julio","lizandro","backed developper web","3er semestre");

?>