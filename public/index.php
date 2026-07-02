<?php
require_once "../class/personas.php";
require_once "../class/Libro.php";


$persona1 = new persona("Juan ", "Devia ", "18  ", "Juandevia@gmail.com");
$persona2 = new persona("Santiago ", "Hernandez ", "19 ", "santiiii@gmail.com<br><br>");

echo $persona1->saludar();
echo $persona2->saludar();



$libro1 = new Libro(
    "Cien años de soledad<br>",
    "Gabriel García Márquez<br>",
    65000
);

$libro2 = new Libro(
    "El Principito<br>",
    "Antoine de Saint-Exupéry<br>",
    38000
);

$estudiante1 = new estudiante("miguel ","21 ", "juass@gmail.com ","muñoz");

$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
echo $estudiante1->saludar();
?>  