<?php
class persona {
public $nombre;
public $apellido;

public $edad;
public $correo;

public function saludar() {

return "Hola, Mi nombre es: ". $this->nombre."".$this->apellido ."y tengo ".$this->edad." Mi correo es: ".$this->correo."<br>";
}
      
}
?>