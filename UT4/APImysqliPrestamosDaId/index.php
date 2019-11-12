<?php
require_once 'modelo/conexion.php';
include "helper/utilidades.php";
// se ha hecho click en el enlace Listar
if (isset($_GET['opcion']) && $_GET['opcion'] == 'listar') {
    $sql = "call prestamosFechaDaId('2012-5-1','2012-5-30')";
    $prestamos = obtenerRegistros($conexion, $sql);
    include "vistas/vista_listar.php";
    exit();
}

$sql = 'SELECT `mes contratacion`, numero, nombre FROM vista_resumendaid';
$prestamos = obtenerRegistros($conexion, $sql);

include "vistas/vista_inicio.php";
