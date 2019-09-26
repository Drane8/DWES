<?php
include "includes/cabecera.php";
echo "<h3>Generando casillas de verificación</h3>";
echo "<form action='' method='get' >";
echo "<div>";
for ($i = 1; $i <= 10; $i++) {
    echo "<input type='checkbox' name='c$i' value ='Casilla $i' id='c$i'/><label for='c$i'>Casilla $i</label><br> ";
}
echo "</div></form>";

include "includes/pie.php";
?>