<?php
require_once "../class/personas.php";


$persona1 = new persona("Juan ", "Devia ", "18  ", "Juandevia@gmail.com");
$persona2 = new persona("Santiago ", "Hernandez ", "19 ", "santiiii@gmail.com<br><br>");

echo $persona1->saludar();
echo $persona2->saludar();

require_once "../class/Libro.php";

$libro1 = new Libro(
    "Cien años de soledad",
    "Gabriel García Márquez",
    65000
);

$libro2 = new Libro(
    "El Principito",
    "Antoine de Saint-Exupéry",
    38000
);

// Mostrar la información de los libros
$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
?>  