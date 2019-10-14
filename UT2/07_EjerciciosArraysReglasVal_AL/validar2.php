<?php
include "includes/funciones_AL.php";

include "includes/cabecera.php";

$camposValidar = array(
    array('idcentro' => 'A2', 'nomcentro' => null, 'numempleados' => 19),
    array('idcentro' => 'C3', 'nomcentro' => null, 'numempleados' => null),
    array('idcentro' => null, 'nomcentro' => 'donsikus.sa', 'numempleados' => 40),
);

$reglasValidacion = array(
    'idcentro' => array('required' => 1),
    'nomcentro' => array('required' => null),
    'numempleados' => array('required' => 1,'min'=>20)
);

foreach ($camposValidar as $key => $array) {
    $errores = validar2($array, $reglasValidacion);
    if (empty($errores)) {
        echo "La siguiente entrada esta correcta:";
        verArray($array);
    } else {
        echo "Los datos no son correctos:";
        verArray($errores);
    }

}

include "includes/pie.php";
