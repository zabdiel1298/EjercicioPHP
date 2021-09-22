<?php
/* Smarty version 3.1.39, created on 2021-09-21 21:53:09
  from 'C:\wamp64\www\templates\register_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a5445039ab2_44872526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c09b2892989f3161e59c5a935d66609a845c5eb' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\register_empresa.tpl',
      1 => 1632261183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a5445039ab2_44872526 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
  <form  action="register_empresa.php" class="row g-3" method="post">
  <div class="col-md-3">
    <label class="form-label">Nombre de la empresa</label>
    <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" required>
  </div>
  <div class="col-md-3">
    <label  class="form-label">RFC</label>
    <input type="text" class="form-control" id="rfc" name="rfc" maxlength="12" required>
  </div>
  <div class="col-md-7">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>Selecciona un plan</option>
          <option value="1">One</option>
        </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
</form><?php }
}
