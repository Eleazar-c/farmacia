<?php

include_once 'conexion.php';

class usuario{
    var $objetos;
    public function __construct(){
       $db = new conexion();
    //    $this->acceso es una variable del propio modelo
       $this->acceso= $db->pdo; 
    //    cada vez que instanciamos una variable de tipo usuario automaticamente estamos haciendo la conexion pdo
    }
}