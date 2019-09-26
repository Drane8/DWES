<?php
include "includes/cabecera.php";
echo "<h4>Generando tabla de multiplicar de un nº</h5>";
echo "<table border='1px' bordercolor='green'>";
$numero = rand(1,10);
echo "<h5>Tabla de multiplicar del $numero</h6>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>\n<td>$numero * $i</td><td>" . $numero * $i . "</td>\n</tr>";
}
echo "</table>";
include "includes/pie.php";
?>