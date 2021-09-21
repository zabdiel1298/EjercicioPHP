<?php
/* Smarty version 3.1.39, created on 2021-09-17 19:27:26
  from 'C:\wamp64\www\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144ec1e40da92_60165370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68608a6aba9c600fec335f8eb860a23404f0ab5f' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\index.tpl',
      1 => 1631906843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144ec1e40da92_60165370 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" type="text/css" href="templates/css/index.css">
    </head>
    <body>
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                 <input type="text" placeholder="Usuario">
            </div>
            <div class="textbox">
                 <input type="password" placeholder="Contraseña">
            </div>
            <input class="btn" type="button" value="Iniciar Sesion">           
        </div>  
        
       <?php echo $_smarty_tpl->tpl_vars['variable']->value;?>

    </body>
</html><?php }
}
