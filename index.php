<?php

use EmpleadoOO\EmpleadoPlantilla;
use EmpleadoOO\EmpleadoPorComision;
use EmpleadoOO\PruebaPolimorf;
use EmpleadoOO\Empresa;

include_once "clases/Empresa.php";
include_once "clases/EmpleadoPlantilla.php";
include_once "clases/EmpleadoPorComision.php";
include_once "clases/PruebaPolimorf.php";

$resultado = "<strong>Empleado:</strong> <br><br>";

$resultado .= "<strong>Empleado Asalariado</strong><br>";
$empleado1 = new EmpleadoPlantilla("Lola", "Etxegaray", "14-78451589-75", 755, 5);

$resultado .= $empleado1->mostrar() . "<br><br><strong>Empleado Por Comision: </strong><br>";
$empleado2 = new EmpleadoPorComision("Eunate", "Ibarrola", "14-4569871236-15", 8, 20, 2);

$resultado .= $empleado2->mostrar() . "<br><br><strong>Prueba polimorfismo: </strong><br>";
$resultado .= "Los ingresos de " . $empleado1->getApellido() . " son " . PruebaPolimorf::calcular($empleado1) . "<br>";
$resultado .= "Los ingresos de " . $empleado2->getApellido() . " son " . PruebaPolimorf::calcular($empleado2);

$empleado3 = new EmpleadoPlantilla("Grace", "Villareal", "12-1234567890-59", 8, 10);
$empleado4 = new EmpleadoPorComision("Aida", "Domenech", "56-9876543210-78", 6, 1, 3);
$empleado5 = new EmpleadoPlantilla("Rocio", "Camacho", "47-321654987-93", 8, 3);

$empresa = new Empresa();

$empresa->addEmpleado($empleado1);
$empresa->addEmpleado($empleado2);
$empresa->addEmpleado($empleado3);
$empresa->addEmpleado($empleado4);
$empresa->addEmpleado($empleado5);

$resultado .= "<br><br><strong>Listado Empresa: </strong><br>";
$resultado .= $empresa->listarEmpleados();

$resultado .= "<br><br><strong>La suma total de los ingresos es: </strong>" . $empresa->sumaIngresos();
include "vistas/vista_resultado.php"
?>