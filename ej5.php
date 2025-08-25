<?php

// definimos la edad de la persona a verificar.
$edad = 22;

// definimos las variable de la edad minima y maxima.
$edadMinima = 18;
$edadMaxima = 65;

// usar una estructura condicional 'if-else' para verificar si la edad está dentro del rango permitido.
// la condición se verifica con el operador logico '&&' (AND).
if ($edad >= $edadMinima && $edad <= $edadMaxima) {
    // este código se ejecuta si la condición es verdadera.
    echo "felicidades tienes " . $edad . " años cumples con los requisitos de edad para obtener una licencia de conducir.\n";
} else {
    // este código se ejecuta si la condición es falsa.
    echo "lo sentimos tienes " . $edad . " años no cumples con los requisitos de edad para obtener una licencia de conducir.\n";
}

?>