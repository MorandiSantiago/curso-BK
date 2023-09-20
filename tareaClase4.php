<?php
/* ANOTACIONES

//CONCATENACION
$numero = "4";

echo "El numero es: $numero <br>";
echo "El numero es: ($numero+5) <br>";
echo "El numero es: ".($numero+5)."<br>";
echo "El numero es: ". 4 ."<br>";
echo "El numero es: ". "4" ."<br>";
$num2 =  3;
echo "El numero es: ". ($numero+$num2) ."<br>";
//tengo que tener en cuenta que tengo que concatenar las mismas cosas

//OPERACIONES LOGICAS

//puedo hacerlo con booleanos, numeros, strings.

//negacion o NOT
$a = true;
$resultado = !$a; // $resultado sera false
var_dump($resultado);

//y o AND
$a = true;
$b = false;
$resultado2 = $a && $b; // $resultado sera false. Si $a fuese false, el resultado sería false si los dos son true da true sino false
var_dump($resultado2);

//O o OR
$a = true;
$b = false;
$resultado3 = $a || $b; // $resultado sera true. Si $a fuese false, el resultado sería false sino siempre da true
var_dump($resultado3);
echo "<br>";
//OPERACIONES COMBINADAS
$a = true;
$b = false;
$resultado4 = $a && $b || $a; // $resultado sera true. PORQUE PRIMERO SE HACE LA AND Y LUEGO LA OR, 
                             //se hace de izquierda a derecha a menos que ponga parentesis
var_dump($resultado4);

//ESTRUCTURA DE DECISION SIMPLE

//si se cumple la condiciones se ejecuta el codigo
$numero = 5;
$numero2 = 4;
if($numero == $numero2){
    echo "El numero 1 es igual al numero 2";
}else{
    echo "El numero 1 no es igual al numero 2";
}
echo "<br>";
//tambien puedo usar <, >, <=, >=, !=
//tambien puedo usar &&, ||

*/

//EJERCICIOS

//Crear un variable llamada n, asignarle un valor numérico y validar si es un número positivo. Si es un número positivo, imprimir un mensaje diciendo "El número ingresado es un número positivo".
//En caso contrario, no mostrar nada.
$n = 5;
if($n > 0){
    echo "El numero ingresado es un numero positivo";
}

//Crear una variable llamada n, asignarle un valor numérico y validar si es un número mayor a 1 y menor a 10. 
//Si el número es mayor a 1 y menor a 10, imprimir un mensaje diciendo "El número ingresado es mayor a 1 y menor a 10". En caso contrario, no mostrar nada.
$n = 5;
if($n > 1 && $n < 10){
    echo "El numero ingresado es mayor a 1 y menor a 10";
}

//Crear una variable llamada n, asignarle un valor numérico y validar si es un número mayor o igual a 10 o menor a 2. 
//Si el número es mayor o igual a 10 o menor a 2, imprimir un mensaje diciendo "El número ingresado es mayor o igual a 10 o menor a 2". 
//En caso contrario, mostrar un mensaje diciendo que "El número ingresado no pudo ser validado".
$n = 5;
if($n >= 10 || $n < 2){  // || es el OR
    echo "El numero ingresado es mayor o igual a 10 o menor a 2";
}else{
    echo "El numero ingresado no pudo ser validado";
}

//Crear dos variables, una con el nombre numero1 y otra con el nombre numero2, yasignarles dos valores numéricos. Si numero1 es mayor a numero2, imprimir la suma y la resta. 
//Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto. Si numero1 y numero2 son iguales, imprimir el mensaje "Los números ingresados son iguales".
$numero1 = 5;
$numero2 = 4;
if($numero1 > $numero2){
    echo "La suma es: ".($numero1+$numero2)."<br>";             //uso parentesis para que primero haga la suma y luego la concatenacion
    echo "La resta es: ".($numero1-$numero2)."<br>";
}elseif($numero2 > $numero1){                                   //elseif es para poner otra condicion   
    echo "La multiplicacion es: ".($numero1*$numero2)."<br>"; 
    echo "La division entera es: ".($numero1/$numero2)."<br>";
    echo "El resto es: ".($numero1%$numero2)."<br>";
}else{                                                          // se entiendo que la condicion es que son iguales
    echo "Los numeros ingresados son iguales";
}

?>