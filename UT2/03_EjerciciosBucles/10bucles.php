<?php include "includes/cabecera.php"; ?>
<h4>Generando tabla de multiplicar hasta el 7</h4>
<table>
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
        <th>9</th>
        <th>10</th>
        <?php
        for ($i = 1; $i <= 7; $i++) {

            if ($i % 2 == 0) {
                echo "<tr class='par'>";
            } else {

                echo "<tr class='impar'>";
            }
            echo "<td>$i</td>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
</table>
<?php
include "includes/pie.php";
?>