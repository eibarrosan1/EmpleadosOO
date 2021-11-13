<?php
use EmpleadoOO\EmpleadoPlantilla;
include "clases/EmpleadoPlantilla.php";

$resultado = "";
$empleado1 = new EmpleadoPlantilla("Eunate", "Ibarrola Santesteban", "14-78451589-75", 1500, 5);
$resultado = $empleado1->mostrar();
include "vistas/vista_resultado.php"
?>