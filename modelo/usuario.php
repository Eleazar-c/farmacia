<?php

include_once 'conexion.php';

class usuario{
    var $objetos;
   //  para reazlizar de una vez la conexion
    public function __construct(){
       $db = new conexion();
    //    $this->acceso es una variable del propio modelo
       $this->acceso= $db->pdo; 
    //    cada vez que instanciamos una variable de tipo usuario automaticamente estamos haciendo la conexion pdo
    }

   //  Creamos un metodo 

   public function loguearse($dni,$pass)
   {
      $sql="SELECT * FROM usuario inner join tipo_us on us_tipo=id_tipo_us WHERE dni_us=:DNI AND contrasena_us=:PASS";
      // $this->accesso contiene al conexion a la base de datos
      $query = $this->acceso->prepare($sql);
      // Le pasamos los parametros por medio de un array
      $query->execute(array(":DNI"=>$dni,":PASS"=>$pass));
      $this->objetos=$query->fetchall();

      return $this->objetos;
   }
}