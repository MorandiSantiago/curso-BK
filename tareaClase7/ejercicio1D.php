<?php
#Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, 
#New York, Los Ángeles y Chicago. A continuación, mostrar el contenido del array
#con la siguiente estructura: "La ciudad con el índice 0 tiene el nombre Madrid"

$ciudades = [
    "Madrid",
    "Barcelona",
    "Londres",
    "New York",
    "Los Ángeles",
    "Chicago"
];
foreach ($ciudades as $ciudade) {
    if (in_array($ciudade, $ciudades)) #in_array es una funcion que busca un valor en un array y devuelve true o false
    return true;
    echo "La ciudad con el índice " . array_search($ciudade, $ciudades) . " tiene el nombre " . $ciudade . "<br>";
}
return false;

#o lo puedo hacer con for
#for ($i=0; $i < count($ciudades); $i++) { 
#    echo "La ciudad con el índice " . $i . " tiene el nombre " . $ciudades[$i] . "<br>";} #se pone $i porque es el indice del array
#
?>