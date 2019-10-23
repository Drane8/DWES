<?php
// puedo dejar vacío action = "" o action = "?"
include "includes/cabecera.php";
?>
<form id='form' action="ejemplo07.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />

        <label>Qué aficiones tienes?</label><br />
        <div class='uno'>
            <input type="checkbox" name="aficiones[]" value="cine" />Cine<br />
            <input type="checkbox" name="aficiones[]" value="lectura" />Lectura<br />
            <input type="checkbox" name="aficiones[]" value="deporte" />Deporte<br />
            <input type="checkbox" name="aficiones[]" value="baile" />Baile<br />
        </div>

        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
    </div>
</form>
<?php
include "includes/pie.php";
?>