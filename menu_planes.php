<?php
include 'conexion.php';
require_once 'Smarty.class.php';
$con=conexionBD();
$sql="SELECT * FROM planes";
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
 $tpl->display("menu_planes.tpl"); 
      
?>

