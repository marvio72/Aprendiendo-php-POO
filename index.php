<?php
require_once "configuracion.php";

Configuracion::setColor("blue");
Configuracion::setNewletter(true);
Configuracion::setEntorno("localhost");


echo Configuracion::$color.'<br>';
echo Configuracion::$newletter.'<br>';
echo Configuracion::$entorno.'<br>';
