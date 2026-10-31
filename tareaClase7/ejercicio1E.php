<?php
$ciudades = [
    "MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres",
    "NY" => "New York", "LA" => "Los Ángeles", "CCG" => "Chicago"
];
foreach ($ciudades as $indice => $ciudad) {
    echo "El índice de " . htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') .
        " es " . htmlspecialchars($indice, ENT_QUOTES, 'UTF-8') . "<br>";
}
