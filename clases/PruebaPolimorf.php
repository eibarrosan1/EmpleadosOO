<?php
namespace EmpleadoOO;

class PruebaPolimorf 
{
    static function calcular (Empleado $empleado)
    {
        return $empleado->ingresos();
    }
}
?>