<?php

function verARRAY($ARRAY)
{
    echo "<pre>";
    print_r($ARRAY);
    echo "</pre>";
}

//function validar1:

/**
 * Valida un array segun unas reglas predeterminadas
 *
 * @param array $array array a validar
 * @return void
 */
function validar1($array)
{
    $errores = array();

    if (empty($array['nombre'])) {
        $errores['nombre'] = 'Introduzca un nombre';
    }
    if (empty($array['apellidos'])) {
        $errores['apellidos'] = 'Introduzca un apellido';
    }
    if (empty($array['mail'])) {
        $errores['mail'] = 'Introduzca un mail';
    }
    if (!strpos($array['mail'], '@')) {
        $errores['mail'] = 'Introduzca un mail correcto';
    }

    return $errores;
}

//function validar2:
// Argumentos: Los campos a tratar en un ARRAY y 
// las reglas que deben cumplir los campos en otro ARRAY 

// Los errores, si los hay, se devuelven en otro ARRAY

// (Todos los ARRAYs son asociativos)


// Se recorre las reglas de validación de cada campo
// Para cada campo se obtiene sus reglas de validación
// Se comprueba si cumple que es el campo requerido u otra regla,
// en caso de ser requerido u otra regla y no tener valor p mp ser correcto
// se incluye en el ARRAY de errores el mensaje de error
// Devuelve el ARRAY errores

/**
 * Valida un array segun las reglas pasadas por el usuario
 *
 * @param array $array array a validar
 * @param array $reglas reglas con las que validar
 * @return void
 */
function validar2($array, $reglas)
{
    $errores = array();
    foreach ($reglas as $campo => $condiciones) {
        if (isset($condiciones['min']) && ($array[$campo] < $condiciones['min'])) {
            $errores[$campo] = "error, " . $array[$campo] . " menor que " . $condiciones['min'];
        }
        if (!empty($array[$campo]) != $condiciones['required']) {
            $errores[$campo] = "error, $campo requerido";
        }
    }

    return $errores;
}
?>