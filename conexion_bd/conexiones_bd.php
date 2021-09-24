<?php
class conexion{
    public $servidor="localhost";
    public $usuario="root";
    public $db="ejercicio";
    public $password="";
    public function conexionBD(){
    $this->conexion= mysqli_connect($this->servidor, $this->usuario,$this->password,$this->db);
    try{
      if(!$this->conexion){
            echo "<script>alert('error..conexion rechazada')</script>";
            exit();
        }else{
            echo "<script>alert('Conexion exitosa')</script>";
            return $this->conexion;  
            }   
    }
    catch(Exception $e){print_r($e);exit();}
    }   
   }

 function getAllDataFromTable($tabla){
    $con=new conexion();
    $con->conexionBD();
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