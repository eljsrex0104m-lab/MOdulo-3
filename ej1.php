<?php

// hacer variables de pares e impares.
$contadorPares = 0;
$contadorImpares = 0;

// usamos un bucle for para recorrer los numeros del 1 al 50.
for ($numero = 1; $numero <= 50; $numero++) {

    // usar el operador para verificar que el numero sea par 
    if ($numero % 2 == 0) {
        // incrementamos el contador de pares.
        $contadorPares++;
    } else {
        // se incrementa el contador de impares.
        $contadorImpares++;
    }
}

// Mostrar el resultado final.
echo "en el rango del 1 al 50 hay:\n";
echo "numeros pares: " . $contadorPares . "\n";
echo "numeros impares: " . $contadorImpares . "\n";

?>