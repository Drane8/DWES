<?php
// puedo dejar vac�o action = "" o action = "?"
include "includes/cabecera.php";;
?>
<form id='form' action="" method="">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />

        <label>Qué aficiones tienes?</label><br />

        <select name="aficiones[]" multiple="multiple">
            <option value="cine">Cine</option>
            <option value="lectura">Lectura</option>
            <option value="deporte">Deporte</option>
            <option value="baile">Baile</option>
            <option value="teatro">Teatro</option>
            <option value="videojuegos">Videojuegos</option>
        </select><br />

        <label>&nbsp;</label>
        <input type="submit" name="" value="" /><br />

    </div>
</form>
<?php
include "includes/pie.php";
?>