<?php
include "clases/Empleados.php";
$resultado = "";
$empleado1 = new Empleado("Eunate", "Ibarrola Santesteban", 123456789);
$empleado2 = new Empleado("Janire", "Mindegia Etxepare", 987654321);
$resultado .= $empleado1.mostar() + $empleado2.mostrar();
include "vistas/vista_resultado.php";

