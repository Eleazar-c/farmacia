<?php

class conexion{
    private $servidor ="localhost";
    private $db ="farmacia";
    private $puerto=3306;
    private $charset="utf8";
    private $usuario="root";
    private $password="";
    public $pdo=null;
    private $atributos=[PDO::ATTR_CASE=>PDO::CASE_LOWER,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ];
    // PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING Las cadenas vacias se retorna null
    // PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION Para el reporte de errores en el try catch
    // PDO::ATTR_CASE=>PDO::CASE_LOWER Fuera todas las columnas a minusculas
    // PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ que los resultado los devolveran en un array de tipo objeto

    public function __construct()
    {
        $this->pdo= new PDO("mysql:dbname={$this->db};host={$this->servidor};port={$this->puerto};charset={$this->charset}",$this->usuario,$this->password,$this->atributos);
        
    }



}