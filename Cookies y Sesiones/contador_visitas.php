
<?php
/**
 * Esta página web sirve para mostrar una de las principales diferencias entre
 * cookies y sesiones a traves de un contador de visitas.
 * 
 * @author Daniel García
 */
/*Iniciamos la sesion y comprobamos y contador existe*/
session_start();
if (isset($_SESSION['contador'])) {
  $_SESSION['contador'] = $_SESSION['contador'] + 1;
  $sesion = 'Número de visitas: ' . $_SESSION['contador'];
} else {
  $_SESSION['contador'] = 1;
  $sesion = 'Bienvenido a nuestra página web';
}

/*Comprobamos si existe la cookie contador*/
if (isset($_COOKIE['contador'])) {
  // Caduca en un año 
  setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
  $cookie = 'Número de visitas: ' . $_COOKIE['contador'];
} else {
  // Caduca en un año 
  setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
  $cookie = 'Bienvenido a nuestra página web';
}

$resultado = "

<div class='izquierda'>
  <h3>COOKIE</h3>
  <p>$cookie</p>
</div>
<div class='derecha'>
  <h3>SESION</h3>
  <p>$sesion</p></div>";


include "includes/vista_resultado.php";
?>