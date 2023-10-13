<?php

//Se pide ingresar por un formulario el nombre de un alumno y su nota numérica.
//Mostrar la calificación resultante según la nota ingresada con el nombre del alumno:
//0-2: Muy deficiente
//3-5: Insuficiente
//6-7: Bien
//8-9: Notable
//10: Sobresaliente

$nombre = $_POST['nombre']; //$_POST es un array asociativo que contiene los valores de los campos del formulario
$nota = $_POST['nota'];

if ($nota >= 0 && $nota <= 2) {
    echo $nombre . " tiene una nota de " . $nota . " y es Muy deficiente";
} elseif ($nota >= 3 && $nota <= 5) {
    echo $nombre . " tiene una nota de " . $nota . " y es Insuficiente";
} elseif ($nota >= 6 && $nota <= 7) {
    echo $nombre . " tiene una nota de " . $nota . " y es Bien";
} elseif ($nota >= 8 && $nota <= 9) {
    echo $nombre . " tiene una nota de " . $nota . " y es Notable";
} elseif ($nota == 10) {
    echo $nombre . " tiene una nota de " . $nota . " y es Sobresaliente";
} else {
    echo "la nota ingresada no es valida";
}



?>