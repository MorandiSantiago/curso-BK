<?php
#Dado una cadena de caracteres almacenada en una variable, se pide realizar una función que indique si ese string es un palíndromo



#Un palindromo es una palabra que se lee igual de izquierda a derecha como de derecha a izquierda.
$cadena = "neuquen";
function palindromo($cadena){
    #ahora hago que la cadena se lea de izquierda a derecha con strrev
    $cadena2 = strrev($cadena);
    #ahora hago que la cadena se lea de derecha a izquierda 
    if($cadena == $cadena2){
        #ahora hago que si la cadena se lee de izquierda a derecha y de derecha a izquierda sea true
        return true;
    }else{
       
        return false;
    }
}