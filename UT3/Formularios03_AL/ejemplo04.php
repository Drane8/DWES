<?php

$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $nombre .= "No introducido";
}
$resultado = "Nombre: $nombre<br>";

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

if ($_FILES['fichero']['size'] == 0) {
    $resultado .= "<br>No has seleccionado ninguna imagen";
} else {
    move_uploaded_file($_FILES['fichero']['tmp_name'], "img/" . $_FILES['fichero']['name']);
    $resultado .= '<br><br><img width="80%" src="img/' . $_FILES["fichero"]["name"] . '">';
}
include "includes/vista_resultado.php";
?>