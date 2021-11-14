<?php

use EmpleadoOO\EmpleadoPlantilla;
use EmpleadoOO\EmpleadoPorComision;
use EmpleadoOO\PruebaPolimorf;

include_once "clases/EmpleadoPlantilla.php";
include_once "clases/EmpleadoPorComision.php";
include_once "clases/PruebaPolimorf.php";

$resultado = "<strong>Empleado:</strong> <br><br>";
$resultado .= "<strong>Empleado Asalariado</strong><br>";
$empleado1 = new EmpleadoPlantilla("Lola", "Etxegaray", "14-78451589-75", 755, 5);
$resultado .= $empleado1->mostrar() . "<br><br><strong>Empleado Por Comision: </strong><br>";
$empleado2 = new EmpleadoPorComision("Eunate", "Ibarrola Santesteban", "14-4569871236-15", 8, 20, 2);
$resultado .= $empleado2->mostrar() . "<br><br><strong>Prueba polimorfismo: </strong><br>";
$resultado .= PruebaPolimorf::calcular($empleado1) . "<br>";
$resultado .= PruebaPolimorf::calcular($empleado2);
include "vistas/vista_resultado.php"
?>