<?php

$frase = "Estamos Encadenados a las cadenas";

$resultado = "Palabras en la frase \"$frase\": " . explode(" ",$frase) .
"<br>Palabras en la frase \"$frase\" que empiezan por E: " . strtoupper($frase);

include "includes/vista_resultado.php";
?>