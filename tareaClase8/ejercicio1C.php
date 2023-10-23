<?php
#Se pide realizar una función en el que se pase por parámetro el número del mes
#(1 al 12) y devuelva (return) si ese mes tiene 30 o 31 días. Mostrar el resultado retornado por pantalla

function dias($mes){
    if($mes == 2){
        echo "El mes tiene 28 dias";
    }else if($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11){
        echo "El mes tiene 30 dias";
    }else{
        echo "El mes tiene 31 dias";
    }
}
#primero investigue cuantos dias tiene cada mes y hice:
#si el mes es 2, tiene 28 dias
#si el mes es 4, 6, 9, 11, tiene 30 dias
#si el mes es 1, 3, 5, 7, 8, 10, 12, tiene 31 dias
#la consiga decia de 30 o 31 dias pero me parecio mas completo asi.