<?php
$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el índice $indice tiene el nombre " .
        htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8') . "<br>";
}
