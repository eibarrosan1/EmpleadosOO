<?php

use EmpleadoOO\EmpleadoPlantilla;
use EmpleadoOO\EmpleadoPorComision;
include_once "clases/EmpleadoPlantilla.php";
include_once "clases/EmpleadoPorComision.php";

$resultado = "<strong>Empleado:</strong> <br><br>";
$resultado .= "<strong>Empleado Asalariado</strong><br>";
$empleado1 = new EmpleadoPlantilla("Lola", "Etxegaray", "14-78451589-75", 755, 5);
$resultado .= $empleado1->mostrar() . "<br><br>";
$empleado2 = new EmpleadoPorComision("Eunate", "Ibarrola Santesteban", "14-4569871236-15", 8, 20, 2);
$resultado .= $empleado2->mostrar();
include "vistas/vista_resultado.php"
?>