<?php
require_once 'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
    if(isset($_POST['submit']))
    {
        $id_empresa=$_POST['id_empresa'];
        $a=DeleteEmpresa($id_empresa);
        echo "<script>alert('Eliminado satisfactoriamente')</script>", sleep(2),header("location:menu_empresa.php");
    }   
$tabla="empresa";
$id_empresa=$_GET['id'];
$results = getAllDataFromID($tabla,$id_empresa);
$tpl=new Smarty();
$tpl->assign('data',$results);
$tpl->display("delete_empresa.tpl");
