<?php
//Obtener y mostrar el resultado del factorial de 8 sin utilizar gmp_fact, solamente estructuras de repetición.
//el factorial de 8 se calcula multiplicando 8*7*6*5*4*3*2*1

$numero = 8;
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de " . $numero . " es: " . $factorial;

?>