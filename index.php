<?php
require_once 'coche.php';

$coche  = new Coche('Blanco','Ford','Fiesta',250,110,5);
$coche1 = new Coche('Negro','Mercedes','Clase A',350,200,5);
$coche2 = new Coche('Verde','Seat','Ibiza',150,100,4);
$coche3 = new Coche('Azul','Renault','Clio',150,110,4);

echo $coche->mostrarInformacion($coche3);


//Con otro parametro
echo "<br>".$coche->mostrarInformacion("Hola Mundo");

