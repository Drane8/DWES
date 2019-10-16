<?php
include "includes/funciones_AL.php";

include "includes/cabecera.php";

$camposValidacion = array(
    array('idcentro' => 'A2', 'nomcentro' => null, 'numempleados' => 19),
    array('idcentro' => 'C3', 'nomcentro' => null, 'numempleados' => 40),
    array('idcentro' => null, 'nomcentro' => 'donsikus.sa', 'numempleados' => 12),
);

$reglasValidacion = array(
    'idcentro' => array('required' => 1),
    'nomcentro' => array('required' => null),
    'numempleados' => array('required' => 1)
);

echo "Con las reglas: ";
verArray($reglasValidacion);
foreach ($camposValidacion as $key => $valores) {
    $errores = validar2($valores, $reglasValidacion);
    if (empty($errores)) {
        echo "La siguiente entrada esta correcta:";
        verArray($valores);
    } else {
        echo "Los datos no son correctos:";
        verArray($errores);
    }
}

$reglasValidacion['numempleados']['min'] = 20;

echo "<hr>Con las reglas: ";
verArray($reglasValidacion);
foreach ($camposValidacion as $key => $valores) {
    $errores = validar2($valores, $reglasValidacion);
    if (empty($errores)) {
        echo "La siguiente entrada esta correcta:";
        verArray($valores);
    } else {
        echo "Los datos no son correctos:";
        verArray($errores);
    }
}

include "includes/pie.php";
?>