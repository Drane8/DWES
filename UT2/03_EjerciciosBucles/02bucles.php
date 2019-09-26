<?php
include "includes/cabecera.php";
define("ALUMNOS", 20);
$aprobados = 0;
for ($i = 0; $i < ALUMNOS; $i++) {
    $nota = rand(0, 10);
    if ($nota >= 5) {
        $aprobados++;
    }
}

echo "<h4>Simulando notas de una clase de " . ALUMNOS . " alumnos y comprobando aprobados</h4>";
echo "<p>El total de aprobados es: $aprobados";
include "includes/pie.php";
?>
