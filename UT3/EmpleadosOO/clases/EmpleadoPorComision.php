<?php

include_once "clases/Empleado.php";

class EmpleadoPorComision extends Empleado
{

    private $ventasBrutas;
    private $tarifaComision;

    public function __construct($nombre, $apellido, $nss, $ventas, $tarifa)
    {
        $this->ventasBrutas = $ventas;
        $this->tarifaComision = $tarifa;
        parent::__construct($nombre, $apellido, $nss);
    }

    /**
     * Get the value of ventasBrutas
     */
    public function getVentasBrutas()
    {
        return $this->ventasBrutas;
    }

    /**
     * Set the value of ventasBrutas
     *
     * @param  ventasBrutas  
     */
    public function setVentasBrutas($ventasBrutas)
    {
        $this->ventasBrutas = $ventasBrutas;
    }

    /**
     * Get the value of tarifaComision
     */
    public function getTarifaComision()
    {
        return $this->tarifaComision;
    }

    /**
     * Set the value of tarifaComision
     *
     * @param  tarifaComision  
     */
    public function setTarifaComision($tarifaComision)
    {
        $this->tarifaComision = $tarifaComision;
    }

    public function ingresos()
    {
        return $this->tarifaComision * $this->ventasBrutas;
    }
}
