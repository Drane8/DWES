<?php

$totalE = 0;
$frase = "Estamos Encadenados a las cadenas";
$palabras = explode(" ",$frase);
foreach ($palabras as $palabra) {
    if ( substr(strtolower($palabra),0,1) == 'e'){
        $totalE++;
    }
}
$resultado = "Palabras en la frase \"$frase\": " . count($palabras) .
"<br>Palabras en la frase \"$frase\" que empiezan por E: $totalE";
include "includes/vista_resultado.php";
?>