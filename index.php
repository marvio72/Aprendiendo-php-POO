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
}
//Objeto Principal
$principal = new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);
var_dump($principal->entrada);

//Objeto otro paquete
$usuario = new Ua;
//Es lo mismo que $usuario = new PanelAdministrador\Usuario();
var_dump($usuario);