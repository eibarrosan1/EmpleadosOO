<?php
namespace EmpleadoOO;
abstract class Empleado {
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    function __construct($nombre, $apellido, $numeroSeguridadSocial) 
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    function __getNombre() 
    {
        return $this->nombre;
    }

    function __setNombre($nombre) 
    {
        $this->nombre = $nombre;
    }

    function __getApellidos() 
    {
        return $this->apellido;
    }

    function __setApellidos($apellido) 
    {
        $this->apellido = $apellido;
    }

    function __getNumeroSeguridadSocial() 
    {
        return $this->numeroSeguridadSocial;
    }

    function __setNumeroSeguridadSocial($numeroSeguridadSocial) 
    {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    function mostrar() 
    {
        return "Esta empleado: $this->nombre $this->apellido con el NSS: $this->numeroSeguridadSocial";
    }
}
