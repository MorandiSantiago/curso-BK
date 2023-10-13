<?php
//al ejercicio anterior agregarle validaciones con php, para indicar que los datos
//fueron ingresados incorrectamente:
//- Cuando el alumno no fue ingresado.
//- Cuando la nota no fue ingresada.
//- Cuando la nota no es un número.
//- Cuando la nota no es un número entre el 0 y el 10.
//Mostrar un mensaje diferente para cada situación

if (isset($_POST['nombre']) && isset($_POST['nota'])) { //isset() verifica si una variable est definida
    $nombre = $_POST['nombre'];
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
} else {
    echo "los datos ingresados son incorrectos";
}

//tambien se puede agregar is_numeric() que verifica si una variable es un numero o un string numerico
if (isset($_POST['nombre']) && isset($_POST['nota'])) { 
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];

    if (is_numeric($nota)) {
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
    } else {
        echo "la nota ingresada no es un numero";
    }
} else {
    echo "los datos ingresados son incorrectos";
}