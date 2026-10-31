<?php
function calcular($lado) {
    if (!is_numeric($lado) || $lado <= 0) throw new InvalidArgumentException('El lado debe ser positivo.');
    echo "El perímetro es: " . ($lado * 4) . "<br>";
    echo "La superficie es: " . ($lado * $lado) . "<br>";
}
echo "<h1>Cuadrado de lado 5</h1>";
calcular(5);
