<?php

// definir el tamaño del cuadrado.
$tamano = 5;

// este es un bucle exterior que se encarga de las filas.
// se ejecutara 5 veces una por cada fila del cuadrado.
for ($fila = 1; $fila <= $tamano; $fila++) {

    // este es un bucle que se encarga de las columnas.
    // se ejecutara 5 veces por cada fila.
    for ($columna = 1; $columna <= $tamano; $columna++) {
        
        // imprimimos un '#' en cada iteración del bucle.
        // la coma (,) despues de la variable evita un salto de linea.
        echo "#";
    }

    // al finalizar el bucle da (una fila completa),
    // imprimir un salto de linea para pasar a la siguiente fila.
    echo "\n";
}

?>