<?php

function obtenersaludo($parametro){
    return "hola como estas " .$parametro;
}
function mostrardatos($nombre,$apellido,$curso,$semestre){
    $mensaje = "hola soy ".$nombre." ".$apellido." del curso de ".$curso." en el ".$semestre;
    return $mensaje;
}

function calcular($operador,$numero1,$numero2){
    if($operador=="+")
    return $numero1+$numero2;
    if($operador=="-")
    return $numero1-$numero2;
    if($operador=="*")
    return $numero1*$numero2;
    if($operador=="/")
    return $numero1/$numero2;
}

echo obtenersaludo("julio")."\n";
echo mostrardatos("julio","lizandro","backed developper web","3er semestre")."\n";
echo "el total de la suma es : ".calcular("+",10,34);

?>