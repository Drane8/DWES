<?php
session_start();
include "includes/funciones.php";
$sesion = visitasSesion();
$cookie = visitasCookie();

$resultado = "
<script>
  document.getElementById('visita').classList.add('active');
</script>
<div class='izquierda'>
  <h3>COOKIE</h3>
  <p>$cookie</p>
</div>
<div class='derecha'>
  <h3>SESION</h3>
  <p>$sesion</p></div>";


include "includes/vista_resultado.php";
?>