<?php
require_once 'conexion_bd/conexion.php';
//funcion para obtener todos los valores de cierto id
function getAllDataFromID($tabla,$id_empresa){
    $con=new conexion();
    $BD=$con->conexionBD();
    $sql="SELECT * FROM $tabla WHERE id_empresa=$id_empresa";
    $result=mysqli_query($BD,$sql);
        if($result->num_rows > 0)
            {
             $results=array();
             $row= mysqli_fetch_array($result);
             $results=$row;
            }
            else
                { 
                   printf("Error..%s\n",mysqli_error($BD));
                   exit();
                }
                    return $results; 
    }//fin if principal
    //
//funcion para obtener todos los valores de cierta tabla mandandola como parametro
 function getAllDataFromTable($tabla){
    $con=new conexion();
    $BD=$con->conexionBD();
    $sql="SELECT * FROM $tabla";
    $result=mysqli_query($BD,$sql);
        if(!$result)
            {
                printf("Error..%s\n",mysqli_error($BD));
                exit();
            }
            else
            {
                $results=array();
                $row= mysqli_fetch_array($result);
                $results=$row;
                    
             }
        return $results; 
    }
    function AgregarEmpresa($nombre_empresa,$rfc,$plan){
         $con=new conexion();
         $BD=$con->conexionBD();
         $sql="INSERT INTO empresa(nombre_empresa,rfc,id_planes) VALUES('$nombre_empresa','$rfc','$plan')";
         $result=mysqli_query($BD,$sql);
            if(!$result)
             {
                 printf("Error..%s\n",mysqli_error($BD));
                 exit();
             }
            else
             {
             return 'registrado';
             }  
    }//fin if
    function EditarEmpresa($nombre_empresa,$rfc,$plan,$id_empresa){
     $con=new conexion();
     $BD=$con->conexionBD();
     $sql="UPDATE empresa SET nombre_empresa='$nombre_empresa',rfc='$rfc',id_planes='$plan' WHERE id_empresa='$id_empresa'";
     $result=mysqli_query($BD,$sql);
         if(!$result)
             {
               printf("Error..%s\n",mysqli_error($BD));
               return false;
            }
            else
                {
                  return 'modificado';
                }  
        }//fin if
    function DeleteEmpresa($id_empresa){
     $con=new conexion();
     $BD=$con->conexionBD();
     $sql="DELETE FROM empresa WHERE id_empresa=$id_empresa";
     $result=mysqli_query($BD,$sql);
         if(!$result)
             {
                printf("Error..%s\n",mysqli_error($BD));
                return false;
            }
            else
              {
                    return 'eliminado';
              }  
    }//fin if
    function crearBD(){
     $con=new conexion();
     $BD=$con->conexionBD();
     $sql ="CREATE DATABASE prueba";
     $result = mysqli_query($BD,$sql);
     //$sql="CREATE TABLE cliente1(
      //    id_cliente int(11) NOT NULL AUTO_INCREMENT,
      //    nombre_cliente varchar(255) NOT NULL,
      //    fecha_nacimiento date NOT NULL,
      //    usuario varchar(255) NOT NULL,
      //    password varchar(255) NOT NULL,
      //    PRIMARY KEY (id_cliente))";
    }

    
    
   
?>