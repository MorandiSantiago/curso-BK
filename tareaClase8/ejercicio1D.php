<?php
// Ejercicio para palabras ASCII; no normaliza acentos ni signos.
function palindromo($cadena) {
    $texto = strtolower(trim($cadena));
    return $texto === strrev($texto);
}
echo "<h1>Palíndromos simples</h1>";
foreach (["neuquen", "casa"] as $palabra) {
    echo htmlspecialchars($palabra, ENT_QUOTES, 'UTF-8') . ": " .
        (palindromo($palabra) ? "es palíndromo" : "no es palíndromo") . "<br>";
}
