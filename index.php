<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche {
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellido;

    use Utilidades;
}

class VideoJuego {
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Ferrari";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Marco";
$persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre = "Fifa 2019";
$videojuego->mostrarNombre();





