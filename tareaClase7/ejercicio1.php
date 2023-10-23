<?php
#mediante utilización de arrays
#Almacenar en un array los 10 primeros números pares y mostrarlos en pantalla uno debajo del otro.

$numero = 0;
for ($i=0; $i < 10; $i++) { 
    $numero = $numero + 2;
    echo $numero . "<br>";
}

#tambien se puede hacer con while
$numero = 0;
while ($numero < 10) {
    $numero = $numero + 2;
    echo $numero . "<br>";
}
?>




