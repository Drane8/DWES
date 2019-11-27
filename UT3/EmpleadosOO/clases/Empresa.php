<?php

namespace NsEmpresa;

/**
 * Clase que simula a una empresa
 */
class Empresa
{
    private $empleados;

    /**
     * Consructor de la clase empresa
     */
    public function __construct()
    {
        $this->empleados = array();
    }

    /**
     * Añade un empleado a la empresa
     *
     * @param Empleado $emp
     */
    public function addEmpleado(Empleado $emp)
    {
        $this->empleados[] = $emp;
    }

    /**
     * Lista todos los empleados de la empresa
     */
    public function listarEmpleados()
    {
        foreach ($this->empleados as $empleado) {
            $empleado->mostrar();
            echo "<br>";
        }
    }

    /**
     * Lista los ingresos de los empleados de la empresa
     */
    public function listarIngresos()
    {
        foreach ($this->empleados as $empleado) {
            echo $empleado->ingresos() . "€<br>";
        }
    }

    /**
     * Devuelve el empleado con mayores ingresos
     *
     * @return Empleado
     */
    public function empleadoMasIngreso()
    {
        $empleadoMas = null;
        foreach ($this->empleados as $empleado) {
            if (empty($empleadoMas)) {
                $empleadoMas = $empleado;
            } else {
                if ($empleadoMas->ingresos() > $empleado->ingresos()) {
                    $empleadoMas = $empleado;
                }
            }
        }
        return $empleadoMas;
    }
}
