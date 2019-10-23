<?php
$nombre = $_POST['nombre'];
if (empty($nombre)) {
    $resultado = "Nombre no introducido";
} else {
    $resultado = "Hola te llamas $nombre";
}
if (isset($_POST['edad'])) {
    $edad = $_POST['edad'];
    switch ($edad) {
        case "uno":
            $ed = "entre 1 y 18";
            break;
        case "dos":
            $ed = "entre 18 y 65";
            break;
        case "tres":
            $ed = "más de 65";
            break;
    }
    $resultado .= " y tienes $ed años";
}

include "includes/vista_resultado.php";
?>