<?php
include 'conexion.php';
require_once 'Smarty.class.php';
$con=conexionBD();
$sql="SELECT * FROM cliente";
$result=mysqli_query($con,$sql);
if(!$result){
    printf("Error..%s\n",mysqli_error($con));
    exit();
}else{
    $i=0;
    while($row= mysqli_fetch_array($result)){
        $results[$i++]=$row;
   }
        $tpl = new Smarty();
        $tpl->assign('data',$results);
        $tpl->display("menu_clientes.tpl");
}
?>