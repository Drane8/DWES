<?php
include "includes/funciones.php";
include "includes/cabecera.php";

$paises = array(
    'Austria' => 'Viena', 'Italia' => 'Roma',
    'Francia' => 'París', 'España' => 'Madrid', 'Portugal' => 'Lisboa',
    'Irlanda' => 'Dublín', 'Alemania' => 'Berlín', 'Grecia' => 'Atenas'
);

verArray($paises);
ksort($paises);
verArray($paises);
arsort($paises);
verArray($paises);
if (array_key_exists('Italia', $paises)) {
    echo "<h3>Italia se encuentra entre los países</h3>";
}

echo "<h3>Países</h3>";
verArray(array_keys($paises));

echo "<h3>Capitales de EU</h3>";
verArray(array_values($paises));

echo "El pais es <span class='texto'>" . array_search('Atenas', $paises) . "</span>";

include "includes/pie.php";
?>