<?php
require_once 'conexion_bd/conexiones_bd.php';
require_once 'Smarty.class.php';
$b=new conexion();
$b->conexionBD();
//print_r($b);exit();
$tpl = new Smarty();
$tpl->assign('titulo',"Login");
$tpl->display('login.tpl');
//$tpl->display('menu_abcs.tpl');
?>
