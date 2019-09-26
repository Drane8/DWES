<?php
include "includes/cabecera.php";
echo "<h3>Lista de viñetas con for</h3>\n<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>Iteracion $i</li>";
}
echo "</ul>";
echo "<h3>Lista de viñetas con While</h3>\n<ol>";
$j = 1;
while ($j <= 10) {
    echo "<li>Iteracion $j</li>";
    $j++;
}
echo "</ol>";
include "includes/pie.php";
?>