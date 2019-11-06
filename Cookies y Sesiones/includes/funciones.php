<?php

/**
 * Comprueba si hay una cuenta creada almacenada en las cookies
 *
 * @return boolean
 */
function existeCuenta()
{
    return isset($_COOKIE['usuario']) && isset($_COOKIE['password']);
}

/**
 * Comprueba si el usuario y el password exiten y si los datos introducidos
 * son correctos
 *
 * @param string $pass
 * @param string $user
 * @return boolean
 */
function comprobarLogin($user, $pass)
{
    return (existeCuenta()) && ($user == $_COOKIE['usuario'] &&
        $pass == $_COOKIE['password']);
}

/**
 * Esta funcion actualiza o crea el contador de visitas mediante una sesion
 *
 * @return string
 */
function visitasSesion()
{
    $resul = "";
    if (isset($_SESSION['contador'])) {
        $_SESSION['contador'] = $_SESSION['contador'] + 1;
        $resul = 'Número de visitas: ' . $_SESSION['contador'];
    } else {
        $_SESSION['contador'] = 1;
        $resul = 'Bienvenido a nuestra página web';
    }
    return $resul;
}

/**
 * Esta funcion actualiza o crea el contado de visitas mediante una cookie
 *
 * @return string
 */
function visitasCookie()
{
    $resul = "";
    /*Comprobamos si existe la cookie contador*/
    if (isset($_COOKIE['contador'])) {
        // Caduca en un año 
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
        $resul = 'Número de visitas: ' . $_COOKIE['contador'];
    } else {
        // Caduca en un año 
        setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
        $resul = 'Bienvenido a nuestra página web';
    }
    return $resul;
}
