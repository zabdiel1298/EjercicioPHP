<?php
require_once 'conexion_bd/conexion.php';
class abc_empresas{
    function getAllDataFromID($id_empresa){
        $con=new conexion();
        $BD=$con->conexionBD();
        $sql="SELECT * FROM empresa WHERE id_empresa=$id_empresa";
        $result=$BD->query($sql);
        $row=array();
        if($result->num_rows > 0)
        {
           $row= mysqli_fetch_array($result);
        }
        else
        { 
           printf("Error..%s\n",mysqli_error($BD));
           exit();
        }
        return $row; 
    }//fin function

    //funcion para obtener todos los valores de cierta tabla mandandola como parametro
    function getAllDataFromTable(){
        $con= new conexion();
        $BD=$con->conexionBD();
        $sql="SELECT * FROM empresa";
        $result=$BD->query($sql);
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
    }//fin function
    function AgregarEmpresa($nombre_empresa,$rfc,$plan){
         $con=new conexion();
         $BD=$con->conexionBD();
         $sql="INSERT INTO empresa(nombre_empresa,rfc,id_planes) VALUES('$nombre_empresa','$rfc','$plan')";
         $result=$BD->query($sql);
         if(!$result)
             {
                 printf("Error..%s\n",mysqli_error($BD));
                 exit();
             }
            else
             {
                 return 'registrado';
             }  
    }//fin function
    function EditarEmpresa($nombre_empresa,$rfc,$plan,$id_empresa){
         $con=new conexion();
         $BD=$con->conexionBD();
         $sql="UPDATE empresa SET nombre_empresa='$nombre_empresa',rfc='$rfc',id_planes='$plan' WHERE id_empresa='$id_empresa'";
          $result=$BD->query($sql);
         if(!$result)
           {
               printf("Error..%s\n",mysqli_error($BD));
               return false;
           }
           else
           {
              return 'modificado';
           }  
    }//fin function
    function DeleteEmpresa($id_empresa){
         $con=new conexion();
         $BD=$con->conexionBD();
         $sql="DELETE FROM empresa WHERE id_empresa=$id_empresa";
         $result=$BD->query($sql);
         if(!$result)
             {
                printf("Error..%s\n",mysqli_error($BD));
                return false;
             }
            else
              {
                return 'eliminado';
              }  
    }//fin function
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
}//fin class

    

    
    
   
?>