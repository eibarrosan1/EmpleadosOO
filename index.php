<?php
use EmpleadoOO\EmpleadoPorComision;
include "clases/EmpleadoPorComision.php";

$resultado = "";
$empleado1 = new EmpleadoPorComision("Eunate", "Ibarrola Santesteban", "14-4569871236-15", 8, 20, 2);
$resultado = $empleado1->mostrar();
include "vistas/vista_resultado.php"
?>