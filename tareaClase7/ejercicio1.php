<?php
// Guardar los diez primeros números pares en un array y recorrerlo.
$pares = [];
for ($numero = 2; $numero <= 20; $numero += 2) $pares[] = $numero;
foreach ($pares as $numero) echo $numero . "<br>";




