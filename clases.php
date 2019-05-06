<?php

// HERENCIA: La posibilidad de compartir atributos y métodos entre clases

class Persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public function camirar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona {
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct(){
        $this->lenguajes              = "HTML, CSS y JS";
        $this->experienciaProgramador = 10;
    }
 


    /**
     * Set the value of lenguajes
     *
     * @return  self
     */
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }
    
    
    public function programar(){
        return "Soy programador";
    }
    public function repararOrdenador(){
        return "Reparar ordenadores";
    }
    public function hacerOfimatica(){
        return "Estoy escribiendo en Word";
    } 
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent::__construct(); //Es necesario para que pueda heredar el constructor de su padre.
        
        $this->auditarRedes     = 'experto';
        $this->experienciaRedes = 5;
    }
    public function auditoria(){
        return "Estoy auditando una red";
    }
}