<?php
/* Smarty version 3.1.39, created on 2021-09-23 21:26:01
  from 'C:\wamp64\www\templates\register_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cf0e9834a41_52392888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c09b2892989f3161e59c5a935d66609a845c5eb' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\register_empresa.tpl',
      1 => 1632432359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614cf0e9834a41_52392888 (Smarty_Internal_Template $_smarty_tpl) {
?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
<form  action="register_empresa.php" class="row g-3" method="post">
    <div class="container">
        <div class="center">
             <div class="form-group">
                <label for="nombre_empresa" class="col-sm-2 col-form-label">Nombre de la empresa</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="nombre_empresa" required>
                </div>
              </div>
              <br>
                <div class="form-group">
                 <label for="rfc" class="col-sm-2 col-form-label">RFC</label>
                     <div class="col-sm-4">
                         <input type="text" class="form-control" id="rfc" maxlength="12" required>
                     </div>
                </div>
              <br>
                <div class="form-group">
                 <label for="cars">Selecciona el id del plan</label>
                 <select id="obteneridplanes">
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <tr>
                          <option value="fk_id_plan"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_planes'];?>
</option>
                        </tr>
                    <?php
}
}
?>
                 </select>
                </div>
              <br>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <br><button type="submit" class="btn btn-primary">Registrar</button>                    
                    <button type="submit" class="btn btn-secondary">Cancelar</button>
                  </div>
                </div> 
        </div>  
    </div>
</form><?php }
}
