<?php
include_once('../modelo/usuario.php');
session_start(['name'=>'FARM']);
$USER=$_POST['user'];
$PASS=$_POST['pass'];
$usuario=new usuario();

if (!empty($_SESSION['us_tipo'])) {

    switch ($_SESSION['us_tipo']) {
        case 1:
            header('Location:../vista/admin_catalogo.php');
            break;
        case 2:
            header('Location:../vista/tec_catalogo.php');
            break;
    }
}else{

    $usuario->loguearse($USER,$PASS);

    // verifique si es admin o tec
    if (!empty($usuario->objetos)) {
      
        foreach ($usuario->objetos as $objeto ) {
            $_SESSION['usuario']=$objeto->id_usuario;
            $_SESSION['us_tipo']=$objeto->us_tipo;
            $_SESSION['nombre_us']=$objeto->nombre_us;
        }
        // ahora un swich
        switch ($_SESSION['us_tipo']) {
            case 1:
                header('Location:../vista/admin_catalogo.php');
                break;
            case 2:
                header('Location:../vista/tec_catalogo.php');
                break;
            }
    }else{
            header('Location:../vista/login.php');
    }
}