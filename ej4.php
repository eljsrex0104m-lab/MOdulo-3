<?php

// iniciamos con variable para guardar la suma total.
$sumaImpares = 0;

// usa el bucle for para correr los números desde el 1 hasta el 100.
for ($i = 1; $i <= 100; $i++) {
    
    // verificar si el numero es impar usando el operador de modulo (%).
    // si el residuo de la división por 2 no es 0, es un numero impar.
    if ($i % 2 != 0) {
        
        // si es impar lo sumamos a la variable acumulada.
        $sumaImpares += $i; // esta es la forma abreviada de: $sumaImpares = $sumaImpares + $i;
    }
}

// una vez que el bucle alla acabado mostrar el resultado final.
echo "la suma de todos los numeros impares del 1 al 100 es: " . $sumaImpares . "\n";

?>