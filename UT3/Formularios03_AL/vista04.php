<?php

include "includes/cabecera.php";
?>
<form id='form' action="ejemplo04.php" method="post" enctype="multipart/form-data">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" required /><br />
        <p>¿Qué aficiones tienes?</p><br />
        <select name="aficiones[]" multiple="multiple">
            <option value="cine">Cine</option>
            <option value="lectura">Lectura</option>
            <option value="deporte">Deporte</option>
            <option value="baile">Baile</option>
        </select><br />
        <label>Suba una imagen</label><br>
        <input type="file" name="fichero" accept="image/*"/>
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>