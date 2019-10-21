<?php

include "includes/cabecera.php";;
?>
<form id='form' action="" method="">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />
        <div class='uno'>
            <label>Qué edad tienes?</label><br />
            <input type="radio" name="edad" value="uno"  />Entre 1 y 18<br />
            <input type="radio" name="edad" value="dos" />Entre 18 y 65<br />
            <input type="radio" name="edad" value="tres" />Mayor de 65<br />
        </div>
        <label>&nbsp;</label>
        <input type="submit" name="" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>