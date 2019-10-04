<?php
include "includes/funciones.php";
include "includes/cabecera.php";

$paises = array('Austria' => 'Viena','Italia'=>'Roma',
'Francia'=>'París','España'=>'Madrid','Portugal'=>'Lisboa',
'Irlanda'=>'Dublín','Alemania'=>'Berlín','Grecia'=>'Atenas');

verArray($paises);
ksort($paises);
verArray($paises);
arsort($paises);
verArray($paises);


include "includes/pie.php";
?>