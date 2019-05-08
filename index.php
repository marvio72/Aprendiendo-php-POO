<?php

require_once 'autoload.php';

$usuario = new Usuario();
echo $usuario->nombre;
echo '<br>';
echo $usuario->email;

$categoria = new Categoria();
echo '<br>'.$categoria->nombre;
echo '<br>'.$categoria->descripcion;