<?php

function conexionBD(){
   
    $servidor="localhost";
    $usuario="root";
    $db="ejercicio";
    $password="";
    $conexion= mysqli_connect($servidor, $usuario, $password, $db);
    if(!$conexion){
        echo "<script>alert('error..conexion rechazada')</script>";
    }else{
       echo "<script>alert('Conexion exitosa')</script>";
    }
    return $conexion;
 

   
}
 function getAllDataFromTable($tabla){
    $con=conexionBD();
    $sql="SELECT * FROM $tabla";
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
        return $results; 
    }

?>