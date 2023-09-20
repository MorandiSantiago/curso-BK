<?php
    echo "hola mundo <br>";
    echo "<b>hola Argentina </b>";
    //o tambien se puede hacer asi 
    echo "<br>";
    //tambien puedo concatenar se hace poniendo un .

    //para hacer salto de linea se usa "<br>"
    //ejemplo: echo "hola mundo <br>";
    // en negrita se usa "<b> </b>"

    //$variable; //declaracion de variable
    // echo $variable; imprime el valor de la variable

    //= 5 operacion de asignacion, coloco el numero 5 a la variable
    //==  compara si son iguales
    //=== compara si son iguales y del mismo tipo
    
    
    $cinco = "5";
    $cinco2 = 5;
    //la diferencia es que el primero es un string y el segundo es un numero
    var_dump($cinco); //imprime el tipo de dato y el valor de la variable. es como el print
    echo "<br>";

//ejercicio 2
//Cargue en una variable (asignar) la cadena de caracteres "Hola mundo" y luego la imprima por pantalla.
    $variable = "Hola mundo";
    echo $variable;
    echo "<br>";

//ejercicio 3
//operaciones matematicas
$numero1 = 5;
$numero2 = 10;
echo $numero1 + $numero2;
echo "<br>";
echo $numero1 - $numero2;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero1 / $numero2;
echo "<br>";
echo $numero1 % $numero2; //modulo, resto de la division
echo "<br>";

//ejercicio 4
//De grados Celsius a Fahrenheit
//F = (C * 9/5) + 32 esta es mi funcion
$gradosCelsius = 100; //variable
$gradosFahrenheit = ($gradosCelsius * (9/5)) + 32; //operacion
echo $gradosFahrenheit; //imprimo el resultado
echo "<br>";

//ejercicio 5
// Calcular e imprimir el perímetro y el área de un rectángulo con base de 18cm y altura 12cm.
//defino variables, hago la funcion y la imprimo
$base = 18;
$altura = 12;
$perimetro = ($base * 2) + ($altura * 2);
echo $perimetro;
echo "<br>";

//ejercicio 5´
//Calcular e imprimir el perímetro y el área de un círculo dado que su radio es de 30cm.
//defino variables, hago la funcion y la imprimo
$radio = 30;
$perimetroCirculo = 2 * pi() * $radio; //pi() es una funcion de php
echo $perimetroCirculo;
echo "<br>";
