<?php
/**
 * Esta págiuna se encarga de crear la cuenta o borrarla, según el formulario
 * enviado previamente. Si se accede desde fuera del formulario da un error
 * 
 * @author Daniel García
 */
$resultado = "";
if (isset($_POST['crear'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    setcookie('usuario', $user, time() + 365 * 24 * 60 * 60);
    setcookie('password', $pass, time() + 365 * 24 * 60 * 60);
    $resultado = "Cuenta creada con éxito";
} elseif (isset($_POST['borrar'])) {
    setcookie('usuario',"", time() - 1);
    setcookie('password',"", time() - 1);
    $resultado = "Cuenta eliminada con éxito";
} else {
    $resultado = "Error al acceder a la página";
}
$resultado .= "<br><a href='cuenta.php'>Volver a creacion de cuenta</a>";
include "includes/vista_resultado.php";
?>