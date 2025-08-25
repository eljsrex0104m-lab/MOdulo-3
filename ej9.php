<?php

$temperatura = 15; // cambia el valora para poder diferenciar temperaturas
if ($temperatura < 10) {
    echo "la temperatura de " . $temperatura . "°C es fria.";
} elseif ($temperatura >= 10 && $temperatura <= 25) {
    echo "la temperatura de " . $temperatura . "°C es templada.";
} else {
    echo "la temperatura de " . $temperatura . "°C es calurosa.";
}

?>