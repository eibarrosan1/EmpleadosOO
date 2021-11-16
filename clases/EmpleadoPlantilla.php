<?php
namespace EmpleadoOO;
include_once "clases/Empleado.php";

class EmpleadoPlantilla extends Empleado {
    private $sueldo;
    private $dietas;

    function __construct($nombre, $apellido, $numeroSeguridadSocial, $sueldo, $dietas) 
    {
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
    }
 
    public function getSueldo()
    {
        return $this->sueldo;
    }
 
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
        return $this;
    }

    public function getDietas()
    {
        return $this->dietas;
    }

    public function setDietas($dietas)
    {
        $this->dietas = $dietas;
        return $this;
    }

    public function mostrar() 
    {
        return (parent::mostrar() ."<br> Los ingresos: " . $this->ingresos());
    }

    public function ingresos() 
    {
        return $this->getSueldo() + $this->getDietas();
    }
}
?>