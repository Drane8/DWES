<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if (empty($nombre)) {
    $resultado = "Nombre no introducido";
} else if (empty($edad)) {
    $resultado =  "Edad no introducida";
} else {
    $resultado = "Hola te llamas $nombre y tienes $edad años";
}

include "includes/vista_resultado.php"
?>
