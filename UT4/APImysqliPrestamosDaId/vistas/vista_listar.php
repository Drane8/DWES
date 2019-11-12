<?php
include "cabecera.php";
echo "<table border ='1'><tr><th>IdCarnet</th><th>Isbn</th></tr>";
foreach ($prestamos as $prestamo) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($prestamo['IdCarnet']) . "</td>";
    echo "<td>" . htmlspecialchars($prestamo['Isbn']) . "</td>";
    echo "</tr>";
}
echo "</table>";
include "pie.php";
