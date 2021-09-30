<?php
require_once 'Smarty.class.php';
//print_r($b);exit();
$tpl = new Smarty();
$tpl->assign('titulo',"Login");
$tpl->display('login.tpl');
//$tpl->display('menu_abcs.tpl');
?>
