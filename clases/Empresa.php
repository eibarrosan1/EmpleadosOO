<?php
namespace EmpleadoOO;
require_once "clases/Empleado.php";

class Empresa
{
    private $empresa;
    private $resul = "";
    private $ingresos = 0;

    public function addEmpleado(Empleado $empleado)
    {
        $this->empresa[] = $empleado;
    }

    public function listarEmpleados()
    {
        foreach ($this->empresa as $empleado) {
            $this->resul .= $empleado->mostrar() . "<br>";
        }
        return $this->resul;
    }

    public function sumaIngresos()
    {
        foreach ($this->empresa as $empleado) {
            $this->ingresos += $empleado->ingresos();
        }
        return $this->ingresos;
    }
}
?>