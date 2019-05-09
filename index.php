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
}
//Objeto Principal
$principal = new Principal();
// como comprobar que existe un metodo dentro de una clase.
$metodos = get_class_methods($principal);
var_dump($metodos);
$busqueda = array_search('setApellidos',$metodos);
var_dump($busqueda);
// var_dump($principal->usuario);
// var_dump($principal->categoria);
// var_dump($principal->entrada);

//Objeto otro paquete
$usuario = new Ua;
//Es lo mismo que $usuario = new PanelAdministrador\Usuario();
var_dump($usuario);

//Comprobar si existe una clase
//el arroba nos ayudo a ocultar los warnins de los errores.
$clase = @class_exists('PanelAdministrador\Usuario');
if ($clase) {
    echo "<h1>La Clase SI existe</h1>";
}else{
    echo "<h1>La Clase NO existe</h1>";
}