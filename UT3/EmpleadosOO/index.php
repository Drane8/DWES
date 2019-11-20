<?php

include "includes/cabecera.php";

include "clases/EmpleadoAsalariado.php";
include "clases/EmpleadoPorComision.php";

$empleado1 = new EmpleadoAsalariado("Juan","Perez",55214155285,40,7);
$empleado2 = new EmpleadoPorComision("Maria","Jauregui",654654894,20,8);

$empleado1->mostrar();
echo ".Es un ". get_class($empleado1). " con ingresos de: ". $empleado1->ingresos() . "€";
echo "<br>";
$empleado2->mostrar();
echo ".Es un ". get_class($empleado2). " con ingresos de: ". $empleado2->ingresos() . "€";

include "includes/pie.php";
