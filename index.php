<?php
//En esta linea asigno a la variable $marca 
//el varlor de lavariable m enviada 
//mediante el metodo get
$marca = $_GET['m'];

$version = $_GET['v'];

echo 'Marcas: '.$marca;
echo '<br>';
echo 'Version: '.$version;

