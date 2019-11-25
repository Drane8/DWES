<?php

namespace NsEmpresa;


include_once "clases/Empleado.php";

class EmpleadoAsalariado extends Empleado
{
    private $horasTrabajadas;
    private $precioHoras;

    public function __construct($nombre, $apellido, $nss, $horasTrabajadas, $precio)
    {
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioHoras = $precio;
        parent::__construct($nombre, $apellido, $nss);
    }

    /**
     * Get the value of horasTrabajadas
     */
    public function gethorasTrabajadas()
    {
        return $this->horasTrabajadas;
    }

    /**
     * Set the value of horasTrabajadas
     *
     * @param  horasTrabajadas  
     */
    public function sethorasTrabajadas($horasTrabajadas)
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    /**
     * Get the value of precioHoras
     */
    public function getprecioHoras()
    {
        return $this->precioHoras;
    }

    /**
     * Set the value of precioHoras
     *
     * @param  precioHoras  
     */
    public function setprecioHoras($precioHoras)
    {
        $this->precioHoras = $precioHoras;
    }

    public function ingresos()
    {
        return $this->precioHoras * $this->horasTrabajadas;
    }
}
