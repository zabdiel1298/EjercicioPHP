<?php
/* Smarty version 3.1.39, created on 2021-09-21 16:26:11
  from 'C:\wamp64\www\login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a07a391b7d4_88025769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b138a95a30496ad4968fe4542d6cef530ec2464a' => 
    array (
      0 => 'C:\\wamp64\\www\\login.php',
      1 => 1632241530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a07a391b7d4_88025769 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>
include 'conexion.php';
    require_once 'Smarty.class.php';
    if(isset($_POST['submit'])){
    conexionBD();
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    $sql="SELECT * FROM cliente where usuario='$usuario' AND contraseña='$password' ";
    if(!$sql){
        echo "Error..usuario no registrado";
    }else{
        echo "Bienvenido";
    }
        
    }
    $tpl = new Smarty();
    $tpl->assign('titulo',"Menú");
    $tpl->display('header.tpl');
    $tpl->display('menu_abcs.tpl');
<?php echo '?>';
}
}
