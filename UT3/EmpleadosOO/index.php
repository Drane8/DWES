<?php
include "includes/cabecera.php";
include "clases/NsEmpresa.php";

/*
include "clases/EmpleadoAsalariado.php";
include "clases/EmpleadoPorComision.php";
include "clases/PruebaPolimor.php";
include "clases/Empresa.php";*/

$empleado1 = new NsEmpresa\EmpleadoAsalariado("Juan", "Perez", 55214155285, 40, 7);
$empleado2 = new NsEmpresa\EmpleadoPorComision("Maria", "Jauregui", 654654894, 20, 8);

$empleado1->mostrar();
echo ".Es un " . get_class($empleado1) . " con ingresos de: " . $empleado1->ingresos() . "€";
echo "<br>";
$empleado2->mostrar();
echo ".Es un " . get_class($empleado2) . " con ingresos de: " . $empleado2->ingresos() . "€";
echo "<hr>";

echo "Ingresos del empleado 1: " . NsEmpresa\PruebaPolimorf::calcular($empleado1) . "€ <br>";
echo "Ingresos del empleado 2: " . NsEmpresa\PruebaPolimorf::calcular($empleado2) . "€ <br>";
echo "<hr>";

$empresa = new NsEmpresa\Empresa();
$empresa->addEmpleado($empleado1);
$empresa->addEmpleado($empleado2);
$empresa->addEmpleado(new NsEmpresa\EmpleadoAsalariado("Mario", "Usarreta", 5465465498, 25,12));
$empresa->addEmpleado(new NsEmpresa\EmpleadoPorComision("Paula", "Gomez", 654654984, 20, 17));
$empresa->listarEmpleados();
$empresa->listarIngresos();
$empleadoMas = $empresa->empleadoMasIngreso();
echo "El empleado con más ingresos es: ";
 $empleadoMas->mostrar();
include "includes/pie.php";
