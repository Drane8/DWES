﻿<?php

include "includes/cabecera.php";
?>
<form id='form' action="ejemplo03.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" required /><br />
        <p>¿Qué aficiones tienes?</p><br />
        <select name="aficiones">
            <option value="cine">Cine</option>
            <option value="lectura">Lectura</option>
            <option value="deporte">Deporte</option>
            <option value="baile">Baile</option>
        </select><br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>