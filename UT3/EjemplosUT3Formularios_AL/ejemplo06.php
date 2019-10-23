<?php
$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $resultado = "Nombre no introducido";
} else {
    $resultado = "Hola te llamas $nombre";
}
$aficiones = "";
if (isset($_POST['cine'])) {
    $aficiones .= "<li>" . $_POST['cine'] . "</li>";
}
if (isset($_POST['lectura'])) {
    $aficiones .= "<li>" . $_POST['lectura'] . "</li>";
}
if (isset($_POST['deporte'])) {
    $aficiones .= "<li>" . $_POST['deporte'] . "</li>";
}
if (isset($_POST['baile'])) {
    $aficiones .= "<li>" . $_POST['baile'] . "</li>";
}
if (!empty($aficiones)) {
    $resultado .= "<br />Tus aficiones son: <ul>$aficiones</ul>";
}

include "includes/vista_resultado.php";
?>
