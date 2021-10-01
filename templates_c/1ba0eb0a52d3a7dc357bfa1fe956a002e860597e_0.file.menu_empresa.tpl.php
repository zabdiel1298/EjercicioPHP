<?php
/* Smarty version 3.1.39, created on 2021-10-01 17:03:49
  from 'C:\wamp64\www\templates\menu_empresa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61573f75a380c8_03212230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba0eb0a52d3a7dc357bfa1fe956a002e860597e' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\menu_empresa.tpl',
      1 => 1633107824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61573f75a380c8_03212230 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
<form action="menu_empresa.php" method="post">
    
   <table class="table caption-top">
      <caption>Lista de empresas</caption>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre de la empresa</th>
          <th scope="col">RFC</th>
          <th scope="col">Id del plan</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th scope="col"><a href="register_empresa.php" class="fa fa-plus-circle">Agregar empresa</th></a>
        </tr>
      </thead>
      <tbody>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <td align="center" name="idempresa" id="idempresa"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_empresa'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_empresa'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rfc'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_planes'];?>
</td>
                <th scope="col"><a href="edit_empresa.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_empresa'];?>
" class="far fa-edit"></th></a>
                <th scope="col"><a href="delete_empresa.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_empresa'];?>
" class="fas fa-trash-alt"></th></a> 
            </tr>
        <?php
}
}
?>
      </tbody>
    </table> 
    
</form>
<?php }
}
