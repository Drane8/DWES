<?php
include "includes/cabecera.php";
echo "<h4>Generando tabla de multiplicar de un nº</h5>";
echo "<table>"; ?>
<tr>
    <th>X</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
</tr>
<?php
for ($i = 1; $i <= 8; $i++) {
    echo "<tr >";
    echo "<td>$i</td>";
    for ($j = 1; $j <= 8; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
include "includes/pie.php";
?>