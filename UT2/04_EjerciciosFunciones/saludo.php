<?php

function saludar()
{
      $i = 1;
      while ($i <= 7) {
            echo "Saludo $i Hola, esto es un saludo sin parámetros<br>";
            $i++;
      }
}

function saludarPersonalizado($nombre = "Pepe")
{

      echo "<p>Primer saludo<br>Hola, esto es un saludo sin parámetros<br>
      Segundo saludo<br>Hola $nombre, ¿Cómo estás?<p>";
}

include "includes/cabecera.php";

saludarPersonalizado();
echo "<hr/>";
saludar();


include "includes/pie.php";
?>
