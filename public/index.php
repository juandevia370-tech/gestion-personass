<?php
require_once "../class/personas.php";

$persona1 = new persona();
$persona1->nombre = "Santiago ";
$persona1->apellido = "Hernandez ";
$persona1->edad = "25 ";
$persona1->correo = "SAntiaaago09@gmail.com";




$persona2 = new persona();
$persona2->nombre = "Juan ";
$persona2->apellido = "Devia ";
$persona2->edad = "18 ";
$persona2->correo = " juandevia@gmail.com";

echo $persona1->saludar();
echo $persona2->saludar();




?>