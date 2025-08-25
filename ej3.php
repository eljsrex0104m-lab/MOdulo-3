<?php

// Definimos el número secreto que el programa debe adivinar.
$numeroSecreto = 27;

// Inicializamos la variable que contendrá el intento actual.
// Empezamos desde 1 para que el primer intento sea el 1.
$intento = 1;

// inicia el contador de intentos.
$contadorIntentos = 0;

// usar el bucle 'while' para seguir intentando hasta que muestre el número secreto.
while ($intento != $numeroSecreto) {
    
    // mostrar el intento actual para ver el progreso.
    echo "Intento #" . ($contadorIntentos + 1) . ": El número es " . $intento . "\n";
    
    // incrementar el número del intento para el siguiente ciclo.
    $intento++;
    
    // incrementar el contador de intentos totales.
    $contadorIntentos++;
}

// una vez que el bucle termina es que se encontró el número.
// mostrar el resultado final.
echo "\nfelicidades el número secreto era " . $numeroSecreto . ".\n";
echo "se ha adivinado en " . $contadorIntentos . " intentos.\n";

?>