<?php

function pruebaPrede($a, $b = 6, $c = 3)
{
    return $a + $b + $c;
}

$resultado = "La suma con el párametro \$a=12 es " . pruebaPrede(12);
$resultado = $resultado . "<br>La suma con \$a=12 y \$b=100 es " . pruebaPrede(12,100);
$resultado = $resultado . "<br>La suma con \$a=12 \$b=100 y \$c=200 es " . pruebaPrede(12,100,200);

include "includes/vista_resultado.php";

?>-