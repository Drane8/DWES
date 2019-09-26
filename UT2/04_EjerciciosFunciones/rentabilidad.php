<?php

function calcularRentabilidad($cantidadInicial,$cantidadVenta,$dividendos)
{
    $rentabilidad = (($cantidadVenta - $cantidadInicial + $dividendos) / $cantidadInicial) * 100;

    return number_format($rentabilidad, 2);
}
include "includes/cabecera.php";

$cantidadInicial = rand(10000,20000);
$cantidadVenta = 17000;
$dividendos = 500;

echo "Cantididad inicial: $cantidadInicial<br>";
echo "Cantidad por la venta: $cantidadVenta<br>";
echo "Dividendos: $dividendos<br>";
echo "La rentabilidad es de: " . calcularRentabilidad($cantidadInicial,$cantidadVenta,$dividendos) . "%";

include "includes/pie.php";
?>