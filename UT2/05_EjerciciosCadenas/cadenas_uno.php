<?php

$frase = "Estamos Encadenados a las cadenas";

$resultado = "Longitud de la frase \"$frase\": " . strlen($frase) .
"<br>Frase en mayúsculas: " . strtoupper($frase);

include "includes/vista_resultado.php";
?>