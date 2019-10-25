<?php

$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $nombre .= "No introducido";
}
$resultado = "Nombre: $nombre<br>";

$aficion = $_POST['aficiones'];
$resultado .= "<br>Tu aficion es $aficion";

include "includes/vista_resultado.php";

?>