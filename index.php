<?php
include_once 'conexion.php';
require_once 'Smarty.class.php';


$tpl = new Smarty();
$tpl->assign('titulo',"Login");
$tpl->display('login.tpl');
//$tpl->display('menu_abcs.tpl');
?>
