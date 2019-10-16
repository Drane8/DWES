<?php
include "includes/funciones_AL.php";

include "includes/cabecera.php";

$camposValidacion = array(
    array(
        'idcentro' => 'A2',
        'nomcentro' => null,
        'numempleados' => null
    ),
    array(
        'idcentro' => 'C3',
        'nomcentro' => 'progis sl',
        'numempleados' => 40
    ),
    array(
        'idcentro' => null,
        'nomcentro' => 'donsikus.sa',
        'numempleados' => 12
    ),
);

$reglasValidacion = array(
    'idcentro' => array('required' => 1),
    'nomcentro' => array('required' => 0),
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
$reglasValidacion['nomcentro']['required'] = 1;
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