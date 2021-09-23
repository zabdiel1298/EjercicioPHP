<?php
include 'conexiones_bd.php';
require_once 'Smarty.class.php';
 $tabla="empresa";
 getAllDataFromTable($tabla);
 $results= getAllDataFromTable($tabla);
 
 $tpl = new Smarty();
 $tpl->assign('data',$results);
 $tpl->display("menu_empresa.tpl"); 
  if($_GET["acc"] && $_GET["acc"]=="register_empresa"){
       header("location:register_empresa.php");
    }
?>

