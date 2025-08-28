<?php
function arrayToJson($datos) {
    return json_encode($datos);
}

// Ejemplo de uso
$usuario = [
    'nombre' => 'ana',
    'edad' => 30,
    'ciudad' => 'madrid'
];

$json_usuario = arrayToJson($usuario);

echo $json_usuario;
// Resultado esperado: {"nombre":"ana","edad":30,"ciudad":"madrid"}
?>





<?php
function contarPalabras($texto) {
    // Convierte el texto a minúsculas
    $texto_minusculas = strtolower($texto);
    // Elimina la puntuación, dejando solo letras, números y espacios
    $texto_limpio = preg_replace('/[^\w\s]/', '', $texto_minusculas);
    // Divide el texto en un array de palabras
    $palabras = explode(' ', $texto_limpio);
    // Filtra los elementos vacíos que puedan quedar después del explode
    $palabras_filtradas = array_filter($palabras, 'strlen');
    // Cuenta la frecuencia de cada palabra
    return array_count_values($palabras_filtradas);
}

// Ejemplo de uso
$frase = "hola, mundo. el mundo es un lugar genial, hola!";
$frecuencia = contarPalabras($frase);

print_r($frecuencia);
/* Resultado esperado:
Array
(
    [hola] => 2
    [mundo] => 2
    [el] => 1
    [es] => 1
    [un] => 1
    [lugar] => 1
    [genial] => 1
)
*/
?>






<?php
function esPrimo($numero) {
    // Casos base
    if ($numero <= 1) {
        return false;
    }
    if ($numero === 2) {
        return true;
    }
    // Si es divisible por 2, no es primo
    if ($numero % 2 === 0) {
        return false;
    }
    // Itera desde 3 hasta la raíz cuadrada del número (solo impares)
    for ($i = 3; $i <= sqrt($numero); $i += 2) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

// Ejemplos de uso
echo esPrimo(7) ? "7 es primo\n" : "7 no es primo\n";
echo esPrimo(12) ? "12 es primo\n" : "12 no es primo\n";
echo esPrimo(2) ? "2 es primo\n" : "2 no es primo\n";
echo esPrimo(0) ? "0 es primo\n" : "0 no es primo\n";
?>







<?php
function invertirString($cadena) {
    return strrev($cadena);
}

// Ejemplo de uso
$texto = "programacion";
$texto_invertido = invertirString($texto);

echo $texto_invertido;
// Resultado esperado: noicamargorp
?>








<?php
function generarContrasena($longitud = 12, $incluir_especiales = true) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($incluir_especiales) {
        $caracteres .= '!@#$%^&*()_+';
    }
    $contrasena = '';
    $max = strlen($caracteres) - 1;

    for ($i = 0; $i < $longitud; $i++) {
        $contrasena .= $caracteres[mt_rand(0, $max)];
    }

    return $contrasena;
}

// Ejemplos de uso
$pass_simple = generarContrasena(10, false);
$pass_fuerte = generarContrasena(16, true);

echo "Contraseña simple: " . $pass_simple . "\n";
echo "Contraseña fuerte: " . $pass_fuerte . "\n";
?>