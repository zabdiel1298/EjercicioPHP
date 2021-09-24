<?php
require_once 'conexion_bd/conexiones_bd.php';
require_once 'Smarty.class.php';
    $usuario =$_POST['usuario'];
    $password =$_POST['password']; 
if(!isset($_POST['submit'])) {
    $b=new conexion();
    $b->conexionBD();
   
  
    $sql=" SELECT usuario,password FROM cliente where usuario='$usuario' AND password='$password' ";
    $result = mysqli_query($sql);
    print_r($result);exit();
    if ($sql==0) {
       echo "Error..usuario no registrado";
        exit();
    }else{
        echo "Bienvenido";
         }  
    }
    $tpl = new Smarty();
    $tpl->assign('titulo', "Menú");
    $tpl->display('header.tpl');
    $tpl->display('menu_abcs.tpl');
   
    if($_GET["acc"] && $_GET["acc"]=="menu_planes"){
       header("location:menu_planes.php");
    }
     if($_GET["acc"] && $_GET["acc"]=="menu_clientes"){
       header("location:menu_clientes.php");
    }
     if($_GET["acc"] && $_GET["acc"]=="menu_empresa"){
       header("location:menu_empresa.php");
    }

    

?>