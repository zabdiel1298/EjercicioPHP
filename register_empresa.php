<?php
require_once 'conexion_bd/conexiones_bd_planes.php';
require_once 'conexion_bd/conexiones_bd_empresa.php';
require_once 'Smarty.class.php';
  
 $tabla1="planes";
 getAllDataFromPlanes($tabla1);
 $results_plan= getAllDataFromPlanes($tabla1);
 $tpl = new Smarty();
 $tpl->assign('data',$results_plan);
 $tpl->display("register_empresa.tpl");
   if(!isset($_POST['submit'])){
        $nombre_empresa = $_POST['nombre_empresa'];
        $rfc=$_POST['rfc'];
        $plan=$_POST['planes'];
        $a=AgregarEmpresa($nombre_empresa,$rfc,$plan);
        //$b=crearBD();
        $c=crearTablaCliente();
            if($a=='registrado'){
                echo "<script>alert('Agregado satisfactoriamente')</script>",header("location:menu_empresa.php");
            }else
              {"<script>alert('Error..volver a verificar')</script>";}
    } //fin if 



?>