<?php
require_once 'conexion_bd/conexion.php';
function getAllDataFromPlanes($tabla){
  $con=new conexion();
  $BD=$con->conexionBD();
  $sql="SELECT * FROM $tabla";
  $result=mysqli_query($BD,$sql);
    if(!$result)
        {
            printf("Error..%s\n",mysqli_error($con));
            exit();
        }
    else
        {
            $results=array();
            $row= mysqli_fetch_array($result);
            $results=$row;       
        }
            return $results; 
    }//fin function

