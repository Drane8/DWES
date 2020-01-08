<?php

class Controlador
{

    public function run()
    {
        if (!isset($_POST['oper'])) { //no se ha enviado el formulario // primera petición
            //se llama al método para mostrar el formulario inicial
            $this->mostrarFormulario("validar", null, null);
            exit();
        }
        if (isset($_POST['oper']) && ($_POST['oper']) == 'validar') { //se ha enviado el formulario //se valida el formulario
            $this->validar();
            exit();
        }
        if (isset($_POST['oper']) && ($_POST['oper']) == 'continuar') { //se ha enviado el formulario
            //Terminar
            unset($_POST); //Se deja limpio $_POST como la primera vez
            //echo 'Programa Finalizado';
            $this->mostrarFormulario("validar", null, null);
            exit();
        }
    }

    private function mostrarFormulario($fase, $validador, $resultado)
    {
        //se muestra la vista del formulario (la plantilla form_bienvenida.php)   
        include 'vistas/form_bienvenida.php';
    }

    private function crearReglasDeValidacion()
    {
        $reglasValidacion = array(
            "apellido" => array("required" => true),
            "nombre" => array("required" => true),
            "edad" => array("min" => 16, "required" => true)
        );

        return $reglasValidacion;
    }

    private function validar()
    {
        $validador = new ValidadorForm();
        $reglasValidacion = $this->crearReglasDeValidacion();
        $validador->validar($_POST, $reglasValidacion);
        if ($validador->esValido()) {  // formulario correcto, recoger datos y 
            //volver a mostrar formulario con el resultado correcto
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $resultado = "Bienvenido/a $nombre $apellido, ";
            if (!empty($edad)) {
                $resultado .= "tienes $edad años";
            }
            $this->mostrarFormulario("continuar", $validador, $resultado);
            exit();
        }

        // formulario no correcto, mostrarlo nuevamente con los errores
        $this->mostrarFormulario("validar", $validador, null);
        exit();
    }
}
