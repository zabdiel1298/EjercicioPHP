<?php
include 'conexion.php';
require_once 'Smarty.class.php';
    $con=conexionBD();
    $sql="SELECT * FROM empresa";
    $result=mysqli_query($con,$sql);
    if(!$result){
        printf("Error..%s\n",mysqli_error($con));
        exit();
    }else{
        $i=0;
        $results=array();
        while($row= mysqli_fetch_array($result)){
            $results[]=$row;
       }
    }
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