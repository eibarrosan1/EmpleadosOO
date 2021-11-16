<?php

namespace EmpleadoOO;
abstract class Empleado
{
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    function __construct($nombre, $apellido, $numeroSeguridadSocial)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function getNumeroSeguridadSocial()
    {
        return $this->numeroSeguridadSocial;
    }

    public function setNumeroSeguridadSocial($numeroSeguridadSocial)
    {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
        return $this;
    }

    function mostrar()
    {
        return "Esta empleado: " . $this->getNombre() . " " . $this->getApellido() . " con el NSS: " . $this->getNumeroSeguridadSocial();
    }

    abstract function ingresos();
}
