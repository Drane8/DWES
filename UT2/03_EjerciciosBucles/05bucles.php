<?php
include "includes/cabecera.php";
$cantidad = 250;
$total = 0;
$totalLibros = 0;
$precio = 16;
echo "<h5>Cuantos libros puedes comprar con $cantidad euros</h5>";
while ($total + $precio <=  $cantidad) {
    $totalLibros++;
    $total += $precio;
    echo "$totalLibros: $total<br>";
}
echo "Por $cantidad se pueden comprar $totalLibros de $precio euros";
include "includes/pie.php";
