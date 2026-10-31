<?php
// Datos deliberadamente ficticios para practicar arrays asociativos.
$datos = [
    "Nombre" => "Persona de ejemplo",
    "Apellido" => "Apellido ficticio",
    "Dirección" => "Calle de ejemplo 123",
    "Teléfono" => "0000000000"
];
foreach ($datos as $campo => $valor) {
    echo htmlspecialchars($campo, ENT_QUOTES, 'UTF-8') . ": " .
        htmlspecialchars($valor, ENT_QUOTES, 'UTF-8') . "<br>";
}
