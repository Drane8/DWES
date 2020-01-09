<?php
include "cabecera.php";
//ERRORES
if (Input::siEnviado("post"))  // ha habido envío //también if (isset($validador)) 
{

    $errores = $validador->getErrores();
    if (!empty($errores)) {
        echo "<div class='errores'>";
        foreach ($errores as $campo => $mensajeError) {
            echo "<p>$mensajeError</p>\n";
            unset($_POST[$campo]);
        }
        echo "</div>";
    }
}
//ENTRADAS
?>
<form id="form" action="index.php?" method="post">
    <div id="datos">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo Input::get('nombre') ?>" />
        <br />

        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php echo Input::get('apellido') ?>" />
        <br />

        <label>Edad</label>
        <input type="text" name="edad" value="<?php echo Input::get('edad') ?>" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" name="oper" value="<?php echo $fase ?>" />
    </div>

</form>
<?php
//SALIDAS
echo "<div class='resultado'>";
if (isset($resultado))
    echo $resultado;
echo "</div>";
include "pie.php";
?>