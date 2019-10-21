<?php

    include "includes/cabecera.php";
    
    foreach ($_SERVER as $key => $valor)
    {
        echo "<p>$key - $valor</p>";
    }


    include "includes/pie.php";
