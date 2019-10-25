<?php

include "includes/funciones.php";

$resultado = "Has introducido los siguientes datos:<br>";

$nombre = $_POST['nombre'];
if (!empty($nombre)) {
    $resultado .= "Nombre: $nombre<br>";
}

$password = $_POST['password'];
if (!empty($password)) {
    $resultado .= "Contraseña: $password<br>";
}

$sexo = $_POST['sexo'];
$resultado .= "Sexo: $sexo<br>";

if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
    if ($edad == "uno") {
        $resultado .= "Edad: Entre 1 y 18";
    } else if ($edad == "dos") {
        $resultado .= "Edad: Entre 18 y 65";
    } else {
        $resultado .= "Edad: Mayor de 65";
    }
    $resultado .= "<br>";
}

if (isset($_POST['juegos'])) {
    $juegos = $_POST['juegos'];
    $resultado .= "Usted sabe jugar a:<ul>";
    foreach ($juegos as $juego) {
        $resultado .= "<li>$juego</li>";
    }
    $resultado .= "</ul><br>";
}
$comentarios = $_POST['comentarios'];
if (!empty($comentarios) && $comentarios != "Comentarios") {
    $resultado .= "Comentario: $comentarios<br>";
}

if (isset($_POST['pais'])) {
    $pais = $_POST['pais'];
    if ($pais == "es") {
        $resultado .= "Pais: España";
    } else {
        $resultado .= "Pais: Reino Unido";
    }
    $resultado .= "<br>";
}

if (isset($_POST['colores'])) {
    $resultado .= "Sus colores favoritos:<ul>";
    $colores = $_POST['colores'];
    foreach ($colores as $color) {
        $resultado .= "<li>$color</li>";
    }
    $resultado .= "</ul><br>";
}

$nombre = $_POST['nombre'];

include "includes/vista_resultado.php";
