<?php
include 'conexion.php';
require_once 'Smarty.class.php';
$validar=0; 
if (isset($_POST['submit'])) {
    conexionBD();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM cliente where usuario='$usuario' AND contraseña='$password' ";
    if ($sql==0) {
        echo "Error..usuario no registrado";
        return 0;
    }else{
        echo "Bienvenido";
    }

}
    $tpl = new Smarty();
    $tpl->assign('titulo', "Menú");
    $tpl->display('header.tpl');
    $tpl->display('menu_abcs.tpl');
    if($_GET["acc"] && $_GET["acc"]=="register_empresa"){
        include("register_empresa.php");
    }

    

?>