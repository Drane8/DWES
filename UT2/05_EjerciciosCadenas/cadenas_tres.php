<?php

$texto = "<span class=\"texto\"> Texto</span> con etiquetas <strong>HTML</strong> ";

$resultado = "$texto <br><br>Aplicando htmlspecialchars()<br><br>". htmlspecialchars($texto) .
    "<br><br>Aplicando strip_tags()<br><br>" . strip_tags($texto) . 
    "<br><br>Sustituyendo la e por *<br><br>" . str_replace("e","*",$texto) .
    "<br><br>$texto";
include "includes/vista_resultado.php";
?>