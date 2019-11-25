<?php

namespace NsEmpresa;

abstract class Empleado
{

    private $primerNombre;
    private $apellido;
    private $numeroSeguroSocial;

    public function __construct($nombre, $apellido, $nss)
    {
        $this->primerNombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguroSocial = $nss;
    }

    /**
     * Get the value of primerNombre
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set the value of primerNombre
     *
     * @param  primerNombre  
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @param  apellido  
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get the value of numeroSeguroSocial
     */
    public function getNumeroSeguroSocial()
    {
        return $this->numeroSeguroSocial;
    }

    /**
     * Set the value of numeroSeguroSocial
     *
     * @param  numeroSeguroSocial  
     */
    public function setNumeroSeguroSocial($numeroSeguroSocial)
    {
        $this->numeroSeguroSocial = $numeroSeguroSocial;
    }

    public function mostrar()
    {
        echo "Nombre: " . $this->primerNombre . " " . $this->apellido . ", con NºSS: " . $this->numeroSeguroSocial;
    }

    abstract function ingresos();
}
