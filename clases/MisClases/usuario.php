<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Marco Ruvalcaba";
        $this->email  = "mruvalcaba@oversistemas.com";
    }

    function informacion(){
        echo "Namespace en clase Usuario: ".__NAMESPACE__."<br>";
    }
}


