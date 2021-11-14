<?php
namespace EmpleadoOO;

class PruebaPolimorf 
{
    static function calcular (Empleado $empleado)
    {
        return "Los ingresos de " . $empleado->getApellido() . " son " . $empleado->ingresos();
    }
}
?>