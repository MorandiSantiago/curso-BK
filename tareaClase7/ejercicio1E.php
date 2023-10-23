<?php
#Repite el ejercicio anterior pero ahora con un array asociativo con los índices
#MD para el valor Madrid, BCL para Barcelona, LD para Londres, NY para
#New York, LA para Los Ángeles y CCG para Chicago. Mostrarlo de la siguiente manera: "El índice de Madrid es MD".

$ciudades = [
    "MD" => "Madrid",
    "BCL" => "Barcelona",
    "LD" => "Londres",
    "NY" => "New York",
    "LA" => "Los Ángeles",
    "CCG" => "Chicago"
];
foreach ($ciudades as $ciudade) {
    if (in_array($ciudade, $ciudades)) 
    return true;
    echo "El índice de " . $ciudade . " es " . array_search($ciudade, $ciudades) . "<br>"; 
    #array_search es una funcion que busca un valor en un array y devuelve el indice
}