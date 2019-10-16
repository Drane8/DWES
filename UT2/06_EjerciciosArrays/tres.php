<?php
include "includes/funciones.php";
include "includes/cabecera.php";

$libro1 = array(
    'isbn' => '123456-A',
    'título' => 'El asedio',
    'autor' => 'Arturo Pérez Reverte',
    'precio' => 22.5
);

echo "<h3>Datos de un libro</h3>";

foreach ($libro1 as $clave => $valor) {
    echo strtoupper($clave) . " - " . $valor . "<br>";
}

$libro2 = array(
    'isbn' => '12222-N',
    'título' => 'La reina del sur',
    'autor' => 'Arturo Pérez Reverte',
    'precio' => 20
);

$libro3 = array(
    'isbn' => '111116-P',
    'título' => 'El maestro del esgrima',
    'autor' => 'Arturo Pérez Reverte',
    'precio' => 9
);

$libros = array(
    'libro1' => $libro1,
    'libro2' => $libro2,
    'libro3' => $libro3
);

echo "<hr>";
verArray($libros);
echo "<hr>";
var_dump($libros);
echo "<hr>";

foreach ($libros as $clave => $libro) {
    foreach ($libro as $clave => $valor) {
        echo strtoupper($clave) . " - $valor<br>";
    }
    echo "<hr>";
}

include "includes/pie.php";
?>