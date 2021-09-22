<?php
function conexionBD(){
    session_start();
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
 
    session_abort();
   
}

?>