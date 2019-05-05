<?php
require_once 'coche.php';

$coche  = new Coche('Blanco','Ford','Fiesta',250,110,5);
$coche1 = new Coche('Negro','Mercedes','Clase A',350,200,5);
$coche2 = new Coche('Verde','Seat','Ibiza',150,100,4);
$coche3 = new Coche('Azul','Renault','Clio',150,110,4);

//Atributo public
$coche->color = 'Cafe';

//Atributo protected
//$coche->marca = 'Audi'; //nos marca un error al tratar de ingresar el atributo de esta manera
$coche->setMarca('Audi'); //Esta es la manera correcta

var_dump($coche);

//Atributo privated
//podemos ingresar a su atributo desde un Modulo get
var_dump($coche->getModelo());

