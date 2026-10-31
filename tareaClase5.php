<?php
echo "<h1>Bucles y sumas</h1>";
echo "<h2>Del 1 al 9</h2>";
for ($i = 1; $i <= 9; $i++) echo $i . "<br>";
echo "<h2>Del 9 al 1</h2>";
for ($i = 9; $i >= 1; $i--) echo $i . "<br>";
echo "<h2>Pares del 1 al 20</h2>";
for ($i = 2; $i <= 20; $i += 2) echo $i . "<br>";
echo "<h2>Impares del 1 al 20</h2>";
$i = 1;
while ($i <= 20) {
    echo $i . "<br>";
    $i += 2;
}
$suma = 0;
for ($i = 1; $i <= 20; $i++) $suma += $i;
echo "<p>Suma del 1 al 20: $suma</p>";
$sumaPares = 0;
for ($i = 2; $i <= 20; $i += 2) $sumaPares += $i;
echo "<p>Suma de pares del 1 al 20: $sumaPares</p>";
