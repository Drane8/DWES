<?php
include "includes/funciones_AL.php";

include "includes/cabecera.php";

$personas = array(
    array('nombre' => 'Daniel', 'apellidos' => 'Garcia', 'mail' => 'dg@gmail.com'),
    array('nombre' => 'Idoia', 'apellidos' => null, 'mail' => 'id@gmail.com'),
    array('nombre' => null, 'apellidos' => 'Perez', 'mail' => 'pergmail.com'),
);
verArray($personas);
echo "<hr>Regas: campos nombre, apellidos y email valores requeridos y que el email contenga la @";
echo "<hr>";
foreach ($personas as $key => $array) {
    $errores = validar1($array);
    if (empty($errores)) {
        echo "La siguiente entrada esta correcta:";
        verArray($array);
    } else {
        $nombre = $array['nombre'];
        $apellidos = $array['apellidos'];
        $mail = $array['mail'];
        if (empty($nombre)) {
            $nombre = "<b><i>'Nombre no encontrado'</i></b>";
        }
        if (empty($apellidos)) {
            $apellidos = "<b><i>'Apellidos no encontrados'</i></b>";
        }
        if (empty($mail)) {
            $mail = "<b><i>'Mail no encontrado'</i></b>";
        }


        echo "La entrada de $nombre, $apellidos, $mail tiene los siguientes errores:";
        verArray($errores);
    }

    echo "<hr>";
}

include "includes/pie.php";
?>