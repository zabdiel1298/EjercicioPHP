<?php
/* Smarty version 3.1.39, created on 2021-10-01 21:21:17
  from 'C:\wamp64\www\templates\delete_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61577bcd71e651_44231104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caeb11e153415f8bea4abaadc9465e8c1ab3ac00' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\delete_empresa.tpl',
      1 => 1633038525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61577bcd71e651_44231104 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 

<form action="delete_empresa.php" method="post">
    <div class="container">
        <div class="center">
            <div class="form-group">
                    <input type="hidden" class="form-control" name="id_empresa" id="id_empresa" value="<?php if ((isset($_POST['id_empresa']))) {
echo $_POST['id_empresa'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['id_empresa'];
}?>">
                    <h3>¿Deseas eliminar el registro?</h3>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <br><button type="submit" class="btn btn-primary">Eliminar</button>                    
                        <button type="" class="btn btn-secondary">Cancelar</button>
                      </div>
                    </div> 
            </div>  
        </div>
</form><?php }
}
