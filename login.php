<?php
require_once 'conexion_bd/conexion.php';
require_once 'Smarty.class.php';
//evento que se dispara cuando el usuario da iniciar sesion y verifica si el usuario esta registrado en la base de datos  
if(!isset($_POST['submit']))
    {
        $usuario =$_POST['usuario'];
        $password =$_POST['password']; 
        $a=Login($usuario,$password);   
    }
    if($a==true)
        {
            echo "<script>alert('Bienvenido :D')</script>";
                   $tpl = new Smarty();
                   $tpl->assign('titulo', "Menú");
                   $tpl->display('header.tpl');
                   $tpl->display('menu_abcs.tpl');
        }else
            {
            echo "<script>alert('Error..usuario no identificado')</script>";
                  $tpl = new Smarty();
                  $tpl->assign('titulo',"Login");
                  $tpl->display('login.tpl');
            }
    //en caso que se valide el usuario y la contraseña muestra el tpl
    
   //toma el valor de acc para redirecionar en el menu a la opcion que se escoga
    if($_GET["acc"] && $_GET["acc"]=="menu_planes"){
       header("location:menu_planes.php");
    }
     if($_GET["acc"] && $_GET["acc"]=="menu_clientes"){
       header("location:menu_clientes.php");
    }
     if($_GET["acc"] && $_GET["acc"]=="menu_empresa"){
       header("location:menu_empresa.php");
    }

    function Login($usuario,$password){
        $b=new conexion();
        $BD=$b->conexionBD();
        $sql="SELECT usuario,password FROM cliente where usuario='$usuario' AND password='$password'";
        $result= $BD->query($sql);
            if($result->num_rows > 0)
                {
                   return true;
                }
                else
                 {
                     printf("Error..%s\n",mysqli_error($BD));
                     return false;
                }  
        }//fin function

?>