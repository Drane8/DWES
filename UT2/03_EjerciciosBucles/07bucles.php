<?php
include "includes/cabecera.php";
echo "<h3>Generando botones</h3>";
echo "<form action='' method='get' >";
echo "<div>";
for ($i = 1; $i <= 10; $i++) {
    echo "<label> Botón $i</label> ";
    echo "<input type='submit' name='bEd$i' value ='Editar' /> ";
    echo "<input type='submit' name='bBo$i' value ='Borrar' /><br> ";
}
echo "</div></form>";

include "includes/pie.php";
