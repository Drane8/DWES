<?php

include "includes/cabecera.php";
?>
<form id='form' action="ejemplo01.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />
        <!-- Las validaciones en cliente son para evitar el viaje de ida y vuelta
        Aunque haya validadciones en el cliente, en el servidor siempre debe haber un control de datos -->
        <label>¿Qué edad tienes?</label><br />
        <div classs="uno">
            <input type="radio" name="edad" value="uno" />Entre 1 y 18<br />
            <input type="radio" name="edad" value="dos" />Entre 18 y 65<br />
            <input type="radio" name="edad" value="tres" />Mayor de 65<br />
        </div>
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>