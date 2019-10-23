<?php

$nombre = $_POST['nombre'];
$comentarios = $_POST['comentarios'];
if (empty($nombre)) {
    $nombre = "Nombre no introducido";
}
if (empty($comentarios) || $comentarios == "Comentarios"){
    $comentarios = "Sin comentarios";
}
$resultado = "Tu nombre es $nombre <br />Tu comentario: $comentarios";

include "includes/vista_resultado.php"
?>
