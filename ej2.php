<?php

// definir el numero para generar la tabla de multiplicar.
$numero = 8;

// usar el bucle for para iterar desde 1 hasta 10.
for ($i = 1; $i <= 10; $i++) {
    
    // calcular el resultado de la multiplicación.
    $resultado = $numero * $i;
    
    // mostrar la operación y el resultado.
    echo "$numero x $i = $resultado\n";
}

?>