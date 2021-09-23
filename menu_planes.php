<?php
include 'conexiones_bd.php';
require_once 'Smarty.class.php';
 $tabla="planes";
 getAllDataFromTable($tabla);
 $results= getAllDataFromTable($tabla);
 $tpl = new Smarty();
 $tpl->assign('data',$results);
 $tpl->display("menu_planes.tpl"); 

?>

