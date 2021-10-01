<?php
require_once 'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
$conn = new abc_empresas();
$id_empresa=$_GET['id'];
$tpl=new Smarty();
$tpl->assign('data',$conn->getAllDataFromID($id_empresa));
$tpl->display("delete_empresa.tpl");
if(!isset($_POST['submit']))
    {
        $id_empresa=$_POST['id_empresa'];
        $a=$conn->DeleteEmpresa($id_empresa);
        echo "<script>alert('Eliminado satisfactoriamente')</script>", sleep(2),header("location:menu_empresa.php");
    }   