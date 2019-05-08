<?php

//Los destructores iniven la acción del constructor, cuando este
//finaliza ya no puede ser usado ya que el destructor lo cierra.
class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Marco Ruvalcaba";
        $this->email = "mruvalcaba@oversistemas.com";
        echo "Creando el objeto <br>";    
    }
    
    public function __toString()
    {
        return "Hola, {$this->nombre}, estas registrado como {$this->email} <br>";
    }

    public function __destruct() {
        echo "Destruyendo el objeto";
    }
}


$usuario = new Usuario();

echo $usuario;
