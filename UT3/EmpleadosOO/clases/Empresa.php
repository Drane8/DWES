<?php

namespace NsEmpresa;


class Empresa{
    private $empleados = array();
    
    public function addEmpleado(Empleado $emp)
    {
        $this->empleados[] = $emp;
    }
    public function listarEmpleados()
    {
        foreach ($this->empleados as $empleado) {
            $empleado->mostrar();
            echo "<br>";
        }
    }

    public function listarIngresos()
    {
        foreach ($this->empleados as $empleado) {
            echo $empleado->ingresos()."€<br>";
        }
    }

    public function empleadoMasIngreso()
    {
        $empleadoMas = null;
        foreach ($this->empleados as $empleado) {
            if(empty($empleadoMas)){
                $empleadoMas = $empleado;
            }else{
                if($empleadoMas->ingresos() > $empleado->ingresos()){
                    $empleadoMas = $empleado;
                }
            }
            
        }
        return $empleadoMas;
    }
}