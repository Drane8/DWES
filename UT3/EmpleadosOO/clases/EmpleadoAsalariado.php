<?php

namespace NsEmpresa;

/**
 * Clase hija de Empleado que simula a un empleado
 * asalariado
 */
class EmpleadoAsalariado extends Empleado
{
    private $horasTrabajadas;
    private $precioHoras;

    /**
     * Constructor de la clase EmpleadoAsalariado
     *
     * @param $nombre
     * @param $apellido
     * @param $nss
     * @param $horasTrabajadas
     * @param $precio
     */
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

    /**
     * Este metodo calcula los ingresos del empleado
     */
    public function ingresos()
    {
        return $this->precioHoras * $this->horasTrabajadas;
    }
}
