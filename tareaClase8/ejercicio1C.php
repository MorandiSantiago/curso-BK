<?php
function dias($mes) {
    if (!is_int($mes) || $mes < 1 || $mes > 12) throw new InvalidArgumentException('El mes debe estar entre 1 y 12.');
    if ($mes === 2) return 28;
    return in_array($mes, [4, 6, 9, 11], true) ? 30 : 31;
}
echo "<h1>Días por mes en un año no bisiesto</h1>";
for ($mes = 1; $mes <= 12; $mes++) echo "Mes $mes: " . dias($mes) . " días<br>";
