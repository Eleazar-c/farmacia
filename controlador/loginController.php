<?php
include_once('../modelo/usuario.php');
session_start();
$USER=$_POST['user'];
$PASS=$_POST['pass'];
$usuario=new usuario();
$usuario->loguearse($USER,$PASS);

foreach ($usuario->objetos as $objeto ) {
    print_r($objeto);
}