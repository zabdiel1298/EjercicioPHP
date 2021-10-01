<?php
ob_start();
require_once  'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
//se manda por parametro el nombre de la tabla y toma el valor que retorna la funcion para que pueda mostrarla en tps
$conn=new abc_empresas();
$tpl = new Smarty();
$tpl->assign('data',$conn->getAllDataFromTable());
$tpl->display("menu_empresa.tpl"); 
?>

