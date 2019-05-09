<?php 
//Es muy importante que e namespace tenga el mismo nombre de la 
//carpeta donde esta el archivo.
namespace PanelAdministrador;

class Usuario {
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Rafael Espinoza";
        $this->email = "respinoza@oversistemas.com";
    }

    function informacion() {
        echo "Namespace en clase Usuario/Administrador: " . __NAMESPACE__ . "<br>";
    }
}