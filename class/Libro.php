<?php

class Libro
{
    // Atributos
    public $titulo;
    public $autor;
    public $precio;

    public function __construct($titulo, $autor, $precio)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    public function mostrarInformacion()
    {
        echo "Título: " . $this->titulo ."Autor: " . $this->autor . "Precio: $" . $this->precio . "<br><br>";
    }
}



?>