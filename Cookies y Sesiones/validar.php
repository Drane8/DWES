<?php
session_start();
include "includes/cabecera.php";
include "includes/funciones.php";
if (isset($_POST['logout'])) {
    unset($_SESSION['login']);
    header("location: login.php");
} elseif (isset($_POST['login'])) {
    if (comprobarLogin($_POST['usuario'], $_POST['password'])) {
        $_SESSION['login'] = true;
        echo "Logueado con exito";
    } else {
        echo "Datos de login incorrectos<br><a href='login.php'>Volver al login</a>";
    }
} else {
    header("location: login.php");
}

include "includes/pie.php";
?>