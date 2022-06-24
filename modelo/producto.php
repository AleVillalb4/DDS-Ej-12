<?php

require_once 'tipoProducto.php';

class Producto {
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;


public function MostrarDatos(){ 
    echo 'El id del producto es: '.$this->Id. '<br>';
    echo 'El nombre del producto es: '.$this->Nombre. '<br>';
    echo 'El precio del producto es: '.$this->Precio. '<br>';
    echo 'El stock del producto es: '.$this->Stock. '<br>';
    echo 'El id del tipo de producto es: '.$this->TipoProducto->Id. '<br>';
    echo 'La descripción del tipo del producto es: '.$this->TipoProducto->Descripcion. '<br>';
}
 }
