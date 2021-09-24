<?php
include 'conexion_bd/conexiones_bd.php';
require_once 'Smarty.class.php';
 $tabla="cliente";
 getAllDataFromTable($tabla);
 $results= getAllDataFromTable($tabla);
 $tpl = new Smarty();
 //print_r($results);exit(); 
 $tpl->assign('data',$results);
 $tpl->display("menu_clientes.tpl"); 

?>