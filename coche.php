<?php

class Coche {

    // Atributos o propiedades (variables)

    //PUBLIC: Podemos acceder desde cualquier lugar, dentro de clase actual
    //        dentro de clases que hereden esta clase o fuera de la clase
    public $color;

    // PROTECTED: Podemos acceder desde la clase que los define y desde clases
    //            que hereden esta clase
    protected $marca;

    // PRIVATE: unicamente se puede acceder desde esta clase
    private $modelo;
 

    public $velocidad;
    public $caballaje;
    public $plazas;

    //Constructor
    public function __construct($color, $marca, $modelo , $velocidad, $caballaje, $plazas) {
        $this->color     = $color;
        $this->marca     = $marca;
        $this->modelo    = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas    = $plazas;
    }

    // Métodos, son acciones que hace el objeto (antes funciones)
    // get buena practica para conseguir propiedades
    public function getColor()
    {
        // Busca en esta clase la propiedad X
        return $this->color;
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function acelerar()
    {
        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }
} //fin definicion de la clase   

