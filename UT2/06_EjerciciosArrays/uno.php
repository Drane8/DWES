<?php
include "includes/funciones.php";
include "includes/cabecera.php";

$nombres = array('Ana', 'Pedro', 'Luis', 'Esteban', 'Maite', 'Isabel');
verArray($nombres);
$nombres[] = 'Pablo';
verArray($nombres);
echo "Total alumnos " . count($nombres) . "<br><br>";

foreach ($nombres as $nombre) {
    echo "Alumno/a $nombre<br>";
}

echo "<hr>";

$notas =  array(
    'Ana' => 5, 'Pedro' => 4, 'Luis' => 7,
    'Esteban' => 8, 'Maite' => 5, 'Isabel' => 4.5, 'Paco' => 5.9
);
verArray($notas);

$totalAprobados = 0;
$media = 0;
foreach ($notas as $nom => $nota) {
    echo "$nom - $nota<br>";
    if ($nota >= 5) {
        $totalAprobados++;
    }
    $media += $nota;
}
$media = number_format($media / count($notas), 2);
echo "<br>Total aprobados $totalAprobados<br>
<br>Nota media del curos $media<br><hr>";

krsort($notas);
foreach ($notas as $nom => $nota) {
    echo "$nom - $nota<br>";
}

echo "<br><hr>";
asort($notas);
foreach ($notas as $nom => $nota) {
    echo "$nom - $nota<br>";
}

include "includes/pie.php";
?>