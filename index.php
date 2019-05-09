<?php

require_once 'autoload.php';

//ESPACIOS DE NOMBRE Y PAQUETES
use MisClases\{
    Usuario as U,
    Categoria as C,
    Entrada as E
};
use PanelAdministrador\{
    Usuario as Ua
};

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario   = new U;
        $this->categoria = new C;
        $this->entrada   = new E;
    }
    
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
    public function getCategoria()
    {
        return $this->usuario;
    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
    public function getEntrada()
    {
        return $this->entrada;
    }
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;

        return $this;
    }
    function informacion(){
        echo "Nombre de la Clase: ".__CLASS__.'<br>';
        echo "Ubicación del metodo: ".__METHOD__.'<br>';
        echo "Ubicación del Archivo: ".__FILE__.'<br>';
    }
}
//Objeto Principal
$principal = new Principal();
$principal->informacion();

$usuario = new U;
$usuario->informacion();

$usuarioAdmin = new Ua;
$usuarioAdmin->informacion();