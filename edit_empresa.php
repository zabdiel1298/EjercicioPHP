<?php
require_once 'conexion_bd/conexion.php';
require_once 'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';

//obtener todos los valores para que el usuario modifique lo mejor que se pueda la empresa elegida y se muestra el template
 $id=$_GET['id'];
 $conn=new abc_empresas();
 $tpl = new Smarty();
 $tpl->assign('data',$conn->getAllDataFromID($id));
 $tpl->display("edit_empresa.tpl");
 if(!isset($_POST['submit']))
    {
        $nombre_empresa = $_POST['empresa'];
        $rfc = $_POST['registro'];
        $plan = $_POST['idplanes1'];
        $id_empresa=$_POST['id_empresa'];
        $a=$conn->EditarEmpresa($nombre_empresa,$rfc,$plan,$id_empresa);
            if($a=='modificado')
            {
                echo "<script>alert('Editado satisfactoriamente')</script>", sleep(2),header("location:menu_empresa.php");
            }
            else
             { 
                echo "<script>alert('Error..volver a verificar')</script>",header("location:register_empresa.php");
             } 
    } //fin if

?>