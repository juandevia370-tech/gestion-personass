<?php
require_once "../class/personas.php";


$persona1 = new persona("Juan ", "Devia ", "18  ", "Juandevia@gmail.com");
$persona2 = new persona("Santiago ", "Hernandez ", "19 ", "santiiii@gmail.com");

echo $persona1->saludar();
echo $persona2->saludar();
?>  