<?php

//caso_01

$numeros = array(1,3,5,2,6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros);
print_r($frutas);

//caso_02

$estudiante = array(
    "dni"=>"45746126",
    "edad"=>27,
    "fechanacimiento"=>"2000-01-05",
    "nombres"=>"pedro",
    "apellidos"=>"paredes ",
    "semestre"=>3,
    "deuda"=>100.50,
    "notafinal"=>11.6,);
print_r($estudiante);
foreach($estudiante as $key=>$value){
    echo $key." - ".$value."\n";
}

//caso_03

$estudiante1 = array(
    "dni"=>"45716756",
    "edad"=>24,
    "fechanacimiento"=>"2003-01-05",
    "nombres"=>"rodrigo",
    "apellidos"=>"alvares ",
    "semestre"=>1,
    "deuda"=>100.01,
    "notafinal"=>13.6,);

    
$estudiante2 = array(
    "dni"=>"45745356",
    "edad"=>26,
    "fechanacimiento"=>"2002-01-05",
    "nombres"=>"mario",
    "apellidos"=>"mercedes ",
    "semestre"=>3,
    "deuda"=>100.99,
    "notafinal"=>14.6,);


$estudiante3 = array(
    "dni"=>"45746756",
    "edad"=>28,
    "fechanacimiento"=>"2001-01-05",
    "nombres"=>"juancho",
    "apellidos"=>"camioneta ",
    "semestre"=>2,
    "deuda"=>100,
    "notafinal"=>15.1,);

    $estudiantes = array($estudiante1,$estudiante2,$estudiante3);
    foreach($estudiantes as $key1=>$estudiante){
        echo "Estudiante N° ".($key1+1)."\n";
        foreach($estudiante as $key=>$value) {
            echo $key." - ".$value."\n";
        }
    }
    echo "-----------------------------------------------\n";
    for($i=0;$i<=count($estudiantes)-1;$i++) {
        echo "Estudiante N° ".($i+1)."\n";
        echo "dni ".$estudiantes[$i]["dni"]."\n";
        echo "edad - ".$estudiantes[$i]["edad"]."\n";
        echo "fechanacimiento ".$estudiantes[$i] ["fechanacimiento"]."\n";
        echo "nombres ".$estudiantes[$i] ["nombres"]."\n";
        echo "apellidos".$estudiantes[$i] ["apellidos"]."\n";
        echo "semestre ".$estudiantes[$i]["semestre"]."\n";
        echo "deuda ".$estudiantes[$i] ["deuda"]."\n";
        echo "notafinal".$estudiantes[$i] ["notafinal"]."\n";
    }
$estudiante3 ["notafinal"] = 17.6;
$equipo1 = ["messi","cueva","neymar"];
$equipo2 = ["advincula","lewandoski","ronaldhino"];
$equipos = array_merge($equipo1,$equipo2);
foreach($equipos as$key=>$equipo) {
}
echo $equipo."\n";
?>