<?php
namespace EmpleadoOO;
include_once "clases/Empleado.php";

class EmpleadoPorComision extends Empleado
{
    private $horas;
    private $tarifa;
    private $base;

    function __construct($nombre, $apellido, $numeroSeguridadSocial, $horas, $tarifa, $base) 
    {
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->nombre = $nombre;
        $this->tarifa = $tarifa;
        $this->base = $base;
    }

    public function getHoras()
    {
        return $this->horas;
    }
 
    public function setHoras($horas)
    {
        $this->horas = $horas;
        return $this;
    }

    public function getTarifa()
    {
        return $this->tarifa;
    }

    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;

        return $this;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;
        return $this;
    }

    public function mostrar() 
    {
        return (parent::mostrar() . " trabaja " . $this->getHoras() . " su tarifa es " . $this->getTarifa() . " y su base es " . $this->getBase());
    }

    public function ingresos() 
    {
        return $this->getBase() + $this->getHoras() * $this->getTarifa();
    }
}
?>