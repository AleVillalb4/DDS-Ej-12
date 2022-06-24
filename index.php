<?php

require_once 'modelo/producto.php';
require_once 'modelo/tipoProducto.php';


$tipo = new TipoProducto();
$tipo->Id = '2';
$tipo->Descripcion = 'Galletitas';

$produ = new Producto();
$produ->Id = '1';
$produ->Nombre = 'Merenguitas';
$produ->Precio = '1000';
$produ->Stock = '10';
$produ->TipoProducto= $tipo ;

$produ->MostrarDatos();
