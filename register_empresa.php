<?php
include 'conexion.php';
require_once 'Smarty.class.php';
$tpl = new Smarty();
$tpl->display("register_empresa.tpl");
if(isset($_POST['submit'])){
    $nombre_empresa = $_POST['nombre_empresa'];
    $rfc=$_POST['rfc'];
    $sql="INSERT INTO empresa(nombre_empresa,rfc,id_planes) VALUES('$nombre_empresa','$rfc','1')";
}

?>