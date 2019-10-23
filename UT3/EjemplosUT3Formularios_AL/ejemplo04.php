<?php

$nombre = $_POST['nombre'];
$pass = $_POST['password'];
$resultado = "Tu nombre es $nombre";
if (empty($nombre)) {
    $resultado = "Nombre no introducido";
}
if(empty($pass)){
    $resultado .= ", contraseña no introducida";
}else{
    $resultado .= ", contraseña introducida correctamente";
}

include "includes/vista_resultado.php"
?>