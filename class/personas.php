<?php
class persona
{
    public $nombre;
    public $apellido;

    public $edad;
    public $correo;

    public function __construct($nombre, $apellido, $edad, $correo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
        $this->apellido = $apellido;

    }



    public function saludar()
    {

        return "Hola, Mi nombre es: " . $this->nombre . "" . $this->apellido . "y tengo " . $this->edad . " Mi correo es: " . $this->correo . "<br>";
    }

}
?>