<?php

$carrito = array(array(
    'id' => 1, 'desc' => 'Diccionario Australiano',
    'precio' => 24.95, 'unidades' => 2
), array(
    'id' => 2, 'desc' => 'Building your own database',
    'precio' => 100, 'unidades' => 4
), array(
    'id' => 3, 'desc' => 'Simply Javascript',
    'precio' => 19.99, 'unidades' => 3
), array(
    'id' => 4, 'desc' => 'Android programming',
    'precio' => 39.95, 'unidades' => 1
));

$resul = array();
foreach ($carrito as $clave => $valor) {
    if ($valor['precio'] < 25) {
        $resul[] = $valor;
    }
}
$resultado = "";
foreach ($resul as $valor) {
    $resultado = $resultado . "<div class='articulo'>
        <span class='descripcion'>Descripción "
        . $valor['desc'] . "<br>Precio " . $valor['precio'] .
        "</span>
    </div>";
}

include "includes/vista_resultado.php";
?>