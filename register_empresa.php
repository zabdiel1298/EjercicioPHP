<?php
require_once 'conexion_bd/conexiones_bd_planes.php';
require_once 'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
if(isset($_POST['submit'])){
        $nombre_empresa = $_POST['nombre_empresa'];
        $rfc=$_POST['rfc'];
        $plan=$_POST['planes'];
        $con=new abc_empresas();
        $a=$con->AgregarEmpresa($nombre_empresa,$rfc,$plan);
        //$b=crearBD();
       // $c=crearTablaCliente();
            if($a=='registrado'){
                echo "<script>alert('Agregado satisfactoriamente')</script>",header("location:menu_empresa.php");
            }else
              {"<script>alert('Error..volver a verificar')</script>";}
    } //fin if   
 $conn=new abc_planes();
 $tpl = new Smarty();
 $tpl->assign('data',$conn->getAllDataFromPlanes());
 $tpl->display("register_empresa.tpl");




?>