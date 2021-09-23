<?php
include 'conexiones_bd.php';
require_once 'Smarty.class.php';
 $tabla="empresa";
 getAllDataFromTable($tabla);
 $results= getAllDataFromTable($tabla);
    $tpl = new Smarty();
    $tpl->assign('data',$results);
    $tpl->display("register_empresa.tpl");
    
    
    
if(isset($_POST['submit'])){
    $nombre_empresa = $_POST['nombre_empresa'];
    $rfc=$_POST['rfc'];
    $insertar="INSERT INTO empresa(nombre_empresa,rfc,id_planes) VALUES('$nombre_empresa','$rfc','1')";
    $sentencia=mysqli_query($con,$sql);
}

?>