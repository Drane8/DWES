<?php
// puedo dejar vac�o action = "" o action = "?"
include "includes/cabecera.php";;
?>
<form id='form' action="proceso.php" method="post">
    <div>
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />
        
        <label>Password</label>
        <input type="password" name="password" /><br />

        <label>Selecciones su sexo </label>
        <select name="sexo">
            <option selected="selected" value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select><br />

        <div class='uno'>
            <label>Qué edad tienes?</label><br />
            <input type="radio" name="edad" value="uno" />Entre 1 y 18<br />
            <input type="radio" name="edad" value="dos" />Entre 18 y 65<br />
            <input type="radio" name="edad" value="tres" />Mayor de 65<br />
        </div>

        <label>¿Cuales son tus colores favoritos?</label><br />
        <select name="colores[]" multiple="multiple">
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
            <option value="morado">Morado</option>
            <option value="blanco">Blanco</option>
            <option value="negro">Negro</option>
        </select><br />

        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />

    </div>
</form>
<?php
include "includes/pie.php";
?>