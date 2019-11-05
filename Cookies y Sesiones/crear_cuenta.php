<?php
$resultado = "";
if (isset($_POST['crear'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    setcookie('usuario', $user, time() + 365 * 24 * 60 * 60);
    setcookie('password', $pass, time() + 365 * 24 * 60 * 60);
    $resultado = "Cuenta creada con éxito";
} elseif (isset($_POST['borrar'])) {
    setcookie('usuario', "", time() - 1);
    setcookie('password', "", time() - 1);
    $resultado = "Cuenta eliminada con éxito";
} else {
    header("location: cuenta.php");
}
$resultado .= "<br><a href='cuenta.php'>Volver a creacion de cuenta</a>";
include "includes/vista_resultado.php";
?>