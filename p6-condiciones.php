<?php
echo "Ingrese su edad: ";
$edadEstudiante1= fgets(STDIN);
$edadEstudiante2= 21;

    if($edadEstudiante1 > $edadEstudiante2){
        echo "El estudiante N° 01 es mayor que el estudiante N° 02";
    }
    elseif($edadEstudiante1 == $edadEstudiante2){
        echo "El estudiante N° 01 tiene la misma edad que el estudiante N° 02";
    }
    else{
        echo "El estudiante N° 02 es mayor que el estudiante N° 01";
    }

echo "\n"."Ingrese su Nota Final: ";
$notaFinal= fgets(STDIN);
        if($notaFinal <= 10.5){
            echo "usted esta aprobado a las justas";
        }
        elseif(10.5 < $notaFinal && $notaFinal <=15){
            echo "usted esta aprobado de forma regular";
        }
        else{
            echo "usted muy bien aprobado";
        }

?>