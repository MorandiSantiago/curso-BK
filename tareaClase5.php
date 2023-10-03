<?php
//a) Crear un archivo y mediante estructuras de repetición, realizar los siguientes ejercicios.
//las estructuras de repeticion son: for, while, do while.

//Mostrar numeros del 1 al 9
for ($i = 1; $i < 10; $i++) {
    echo $i . "<br>";
}

//Mostrar los números del 9 al 1.
for ($i = 9; $i > 0; $i--) {
    echo $i . "<br>";
}
//Mostrar los números pares del 1 al 20.
for ($i = 1; $i < 21; $i++) //se puede hacer con while tambien

{
    if ($i % 2 == 0) //si el resto de la division es 0 es par
    {
        echo $i . "<br>";
    }
}
//Mostrar los números impares del 1 al 20. usando while
while ($i < 21) {
    if ($i % 2 != 0) //si el resto de la division es 0 es par
    {
        echo $i . "<br>";
    }
    $i++;
}
// Mostrar la suma de los números del 1 al 20. otra forma tambien.
$suma = 0;
for ($i = 1; $i < 21; $i++) {
    $suma += $i;
}
echo "La suma de los numeros del 1 al 20 es: " . $suma . "<br>";
// Mostrar la suma de los números pares del 1 al 20.
for ($i = 1; $i < 21; $i++) //$i=1 es el valor inicial, $i<21 es la condicion, $i++ es el incremento
{
    if ($i % 2 == 0) //si el resto de la division es 0 es par
    {
        $suma += $i;
    }
}
?>