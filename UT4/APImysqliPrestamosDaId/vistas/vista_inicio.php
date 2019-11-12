<?php
include "cabecera.php";
/*foreach ($prestamos as $prestamo) {
    echo "<div class='prestamo'>";
    echo "<p> " . htmlspecialchars(utf8_encode($prestamo['nombre'])) . " " .
        htmlspecialchars($prestamo['mes contratacion']) . " " . htmlspecialchars($prestamo['numero']) ."</p>";
    echo "</div>\n";
}*/
echo "<table border ='1'><tr><th>Nombre</th><th>Mes contratacion</th><th>Numero socio</th></tr>";
foreach ($prestamos as $prestamo) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars(utf8_encode($prestamo['nombre'])) . "</td>";
    echo "<td>" . htmlspecialchars($prestamo['mes contratacion']) . "</td>";
    echo "<td>" . htmlspecialchars($prestamo['numero']) . "</td>";
    echo "</tr>";
}
echo "</table>";
include "pie.php";
