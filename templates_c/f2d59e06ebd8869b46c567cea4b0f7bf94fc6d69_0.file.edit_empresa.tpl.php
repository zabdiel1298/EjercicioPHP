<?php
/* Smarty version 3.1.39, created on 2021-09-29 18:25:14
  from 'C:\wamp64\www\templates\edit_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154af8adb3b74_12174163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d59e06ebd8869b46c567cea4b0f7bf94fc6d69' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\edit_empresa.tpl',
      1 => 1632939242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6154af8adb3b74_12174163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
<form action="edit_empresa.php" class="row g-3" method="post">
     <input type="hidden" class="form-control" name="id_empresa" id="registro" maxlength="12" value="<?php if ((isset($_POST['id_empresa']))) {
echo $_POST['id_empresa'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['id_empresa'];
}?>">
    <div class="container">
        <div class="center">
                <div class="form-group">
                   <label for="nombre_empresa" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                   <div class="col-sm-4">
                     <input type="text" class="form-control" name="empresa" id="empresa" value="<?php if ((isset($_POST['empresa']))) {
echo $_POST['empresa'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['nombre_empresa'];
}?>" required>
                   </div>
                 </div>
                 <br>
                    <div class="form-group">
                     <label for="" class="col-sm-2 col-form-label">RFC</label>
                         <div class="col-sm-4">
                             <input type="text" class="form-control" name="registro" id="registro" maxlength="12" value="<?php if ((isset($_POST['registro']))) {
echo $_POST['registro'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['rfc'];
}?>" required>
                         </div>
                    </div>
                    <br>  
                    <div class="form-group">
                     <label for="cars">Selecciona el id del plan</label>
                        <select name="idplanes1" id="idplanes1">
                            <tr>
                              <option><?php if ((isset($_POST['idplanes1']))) {
echo $_POST['planes1'];
} else {
echo $_smarty_tpl->tpl_vars['data']->value['id_planes'];
}?></option>
                            </tr>
                        </select>
                    </div>
              <br>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <br><button type="submit" class="btn btn-primary">Modificar</button>                    
                   
                  </div>
                </div> 
        </div>  
    </div>
</form><?php }
}
