<?php
/* Smarty version 3.1.39, created on 2021-10-01 17:39:07
  from 'C:\wamp64\www\templates\menu_abcs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615747bbe4e275_93681740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab15fd3031a7450ffe33988117bddd700178541e' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\menu_abcs.tpl',
      1 => 1633109942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615747bbe4e275_93681740 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
   <div class="default col-md-3">
        <div class="list-group">    
            <a href="menu_planes.php" class="list-group-item">Planes</a>
              <div class="list-group">
                <a href="menu_empresa.php" class="list-group-item">Empresas</a>
              </div>
                  <div class="list-group">
                    <a href="menu_clientes.php" class="list-group-item">Clientes</a>
                    <a href="#" class="list-group-item active">Cerrar sesion</a> 
                  </div> 
        </div>
   </div><?php }
}
