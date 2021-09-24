<?php
/* Smarty version 3.1.39, created on 2021-09-24 19:45:58
  from 'C:\wamp64\www\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614e2af611d907_41446896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f4497bef49ca29df1f45ca09b77eea072b20af' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\login.tpl',
      1 => 1632512643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614e2af611d907_41446896 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="templates/css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body>
        <div class="login-box">
            <form action="login.php" method="post">
             <h1>Iniciar Sesion</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                 <input type="text" class placeholder="Usuario" id="usuario" name="usuario" required>
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                 <input type="password" placeholder="Contraseña" id="password" name="password" required>
            </div>
            <input class="btn" type="submit" id="login" >
            </form>
      
        </div>  
    </body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
 function validar(){ 
                var formvalido=true;
                var usuario=document.getElementById('usuario').value;
                var password=document.getElementById('password').value;
                    if(usuario==""){
                    alert('Error..usuario vacio');
                        }
                    else if(password==""){
                        alert('Error..contraseña vacía');
                    }
                     return formvalido;
                    }
<?php echo '</script'; ?>
><?php }
}
