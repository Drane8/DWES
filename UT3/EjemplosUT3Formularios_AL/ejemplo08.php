<?php
$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $resultado = "Nombre no introducido";
} else {
    $resultado = "Hola te llamas $nombre";
}
$aficion = $_POST['aficiones'];
$resultado .= "<br>Tu aficion es $aficion";


include "includes/vista_resultado.php";
?>
