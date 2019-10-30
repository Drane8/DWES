<?php
/**
 * Función que valida si se ha introducido valores.
 * Recuerda validar1 y validar2
 * -
 * @return $errores devuelve el array con los mensajes de error
 */
    function validar_formulario($nombre, $apellido) 
            
    {
        $errores = array();
        if (empty($nombre))
        {
             $errores["nombre"] = "Introduzca nombre";
        }
               
        if (empty($apellido))
        {
            $errores["apellido"] = "Introduzca apellido";
        }
                
       return $errores;
                
    }
 
?>
