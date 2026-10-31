<?php
function mayusculas($cadena) {
    return strtoupper($cadena);
}
function minusculas($cadena) {
    return strtolower($cadena);
}
$cadena = "Hola mundo";
echo "<h1>Transformaciones de texto ASCII</h1>";
echo htmlspecialchars(mayusculas($cadena), ENT_QUOTES, 'UTF-8') . "<br>";
echo htmlspecialchars(minusculas($cadena), ENT_QUOTES, 'UTF-8') . "<br>";
