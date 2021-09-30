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
              
                return $this->conexion;  
            }   
        }
        catch(Exception $e){
            print_r($e);exit();            
        }
    }      
  
}


