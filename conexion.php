<?php
function conexionBD(){
    session_start();
    $servidor="localhost";
    $usuario="root";
    $password="";
    $conexion= mysqli_connect($servidor, $usuario, $password);
    if(!$conexion){
        echo "<script>alert('error..conexion rechazada')</script>";
    }else{
       echo "<script>alert('Conexion exitosa')</script>";
    }
    return conexionBD;
}

?>