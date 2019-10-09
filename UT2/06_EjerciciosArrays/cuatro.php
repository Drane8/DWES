<?php
include "includes/funciones.php";
include "includes/cabecera.php";

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

verArray($carrito);

foreach ($carrito as $clave => $valor) {
    if ($valor['id'] == 3) {
        echo $valor['desc'];
    }
}

echo "<hr>";

foreach ($carrito as $clave => $valor) {
    if ($valor['precio'] > 25) {
        echo $valor['desc'] . "<br>";
    }
}

echo "<hr>";
$total = 0;
foreach ($carrito as $clave => $valor) {
    $total += $valor['precio'] * $valor['unidades'];
}
echo "Valor total del carrito $total";

include "includes/pie.php";
?>