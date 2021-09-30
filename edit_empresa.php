<?php
require_once 'conexion_bd/conexion.php';
require_once 'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
if(isset($_POST['submit']))
    {
        $nombre_empresa = $_POST['empresa'];
        $rfc = $_POST['registro'];
        $plan = $_POST['idplanes1'];
        $id_empresa=$_POST['id_empresa'];
        $a=EditarEmpresa($nombre_empresa,$rfc,$plan,$id_empresa);
            if($a=='modificado')
            {
                echo "<script>alert('Editado satisfactoriamente')</script>", sleep(2),header("location:menu_empresa.php");
            }
            else
             { 
                echo "<script>alert('Error..volver a verificar')</script>",header("location:register_empresa.php");
             } 
    } //fin if
//obtener todos los valores para que el usuario modifique lo mejor que se pueda la empresa elegida y se muestra el template
 $id=$_GET['id'];
 $tabla="empresa";
 $results=getAllDataFromID($tabla,$id);
 $tpl = new Smarty();
 $tpl->assign('data',$results);
 $tpl->display("edit_empresa.tpl");
   

?>