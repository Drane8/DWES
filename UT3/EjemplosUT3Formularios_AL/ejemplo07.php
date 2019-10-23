<?php
$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $resultado = "Nombre no introducido";
} else {
    $resultado = "Hola te llamas $nombre";
}
if (!isset($_POST['aficiones'])) {
    $resultado .= "<br>No has seleccionado ninguna afición";
} else {
    $aficiones = $_POST['aficiones'];
    $resultado .= "<br>Tus aficiones son: <ul>";
    foreach ($aficiones as $aficion) {
        $resultado .= "<li>" . $aficion . "</li>";
    }
    $resultado .= "</ul>";
}

include "includes/vista_resultado.php";
?>