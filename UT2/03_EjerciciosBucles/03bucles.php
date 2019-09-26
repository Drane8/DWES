<?php
include "includes/cabecera.php";
echo "<h5>Tabla de una fila</h5>\n<table border='1px' bordercolor='green'>\n<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>$i</td>";
}
echo "</tr>\n</table>";
echo "<h5>Tabla de una columna</h5>\n<table border='1px' bordercolor='green'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>\n<td>$i</td>\n</tr>";
}
echo "</table>";
include "includes/pie.php";
?>
