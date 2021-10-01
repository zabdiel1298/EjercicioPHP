<?php
require_once 'conexion_bd/conexion.php';
class abc_planes{
    function getAllDataFromPlanes(){
        $con= new conexion();
        $BD=$con->conexionBD();
        $sql="SELECT * FROM planes";
        $result=mysqli_query($BD,$sql);
        $results=array();
        if($result)
            { 
            while($row=mysqli_fetch_array($result))
                  {
                    $results[]=$row;
                  }
            }
        else
            {
                printf("Error..%s\n",mysqli_error($BD));
                exit();   
            }
                return $results; 
    }//fin function//fin function
}//fin class


