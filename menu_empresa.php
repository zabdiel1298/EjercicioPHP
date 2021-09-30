<?php
ob_start();
require_once  'conexion_bd/conexion.php';
require_once  'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
//se manda por parametro el nombre de la tabla y toma el valor que retorna la funcion para que pueda mostrarla en tpl
 
 $tabla="empresa";
 getAllDataFromTable($tabla);
 $results= getAllDataFromTable($tabla);
 $tpl = new Smarty();
 $tpl->assign('data',$results);
 $tpl->display("menu_empresa.tpl"); 
 
 
 
 
 
 
 
 
 //en caso de que la persona desee registrar una sempresa que lo redireccione al link correspondiente
 // if($_GET["acc"] && $_GET["acc"]=="register_empresa"){
 //      header("location:register_empresa.php");
//    }
//  if($_GET["acc"] && $_GET["acc"]=="edit_empresa"){
//       $id=$_GET['idempresa'];
//       header("location:edit_empresa.php?id=$id");
//    }
//  if($_GET["acc"] && $_GET["acc"]=="delete_empresa"){
//       $id_empresa=$_GET['idempresa'];
//       header("location:delete_empresa.php?id=$id_empresa");
//    }
?>

