<?php

$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $nombre .= "No introducido";
}
$resultado = "Nombre: $nombre<br>";

if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
    if ($edad == "uno") {
        $resultado .= "Edad: Entre 1 y 18";
    } else if ($edad == "dos") {
        $resultado .= "Edad: Entre 18 y 65";
    } else {
        $resultado .= "Edad: Mayor de 65";
    }
} else {
    $resultado .= "Edad no introducida";
}

include "includes/vista_resultado.php";
?>