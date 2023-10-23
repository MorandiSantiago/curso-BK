<?php
#Generar una función que le ingrese por parámetro el valor del lado de un
#cuadrado y calcular su perímetro y su superficie (Mostrar los resultados por la pantalla).

function calcular($lado){
    $perimetro = $lado * 4;
    $superficie = $lado * $lado;
    echo "El perimetro es: $perimetro <br>";
    echo "La superficie es: $superficie <br>";
}
