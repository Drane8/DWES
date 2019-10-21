<?php

$id = $_GET['id'];
$modulo = $_GET['modulo'];
$horas = $_GET['horas'];

$resultado = "ID = $id <br>Modulo = $modulo<br>Horas = $horas";

include "includes/vista_resultado.php";
?>