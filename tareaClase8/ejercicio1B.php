<?php
#Dado una cadena de caracteres almacenada en una variable, se pide realizar
#un función que acepte como parámetro el string y lo muestre en mayúsculas.
#Realizar otra función pero ahora que lo muestra en minúsculas.

function mayusculas($cadena){
    echo strtoupper($cadena);
}
# strtoupper convierte una cadena a mayúsculas, para que muestre en minusculas se usa strtolower
function minusculas($cadena){
    echo strtolower($cadena);
}
