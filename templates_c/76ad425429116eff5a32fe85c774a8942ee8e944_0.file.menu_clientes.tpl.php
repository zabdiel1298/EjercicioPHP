<?php
/* Smarty version 3.1.39, created on 2021-09-23 19:39:53
  from 'C:\wamp64\www\templates\menu_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614cd809144b00_84054475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76ad425429116eff5a32fe85c774a8942ee8e944' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\menu_clientes.tpl',
      1 => 1632425990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614cd809144b00_84054475 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
    <table class="table caption-top">
      <caption>Lista de Clientes</caption>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Usuario</th>
          <th scope="col">Password</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
          <th scope="col"><button class="btn"><i class="fa fa-plus-circle"></i></button>Agregar</th>
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
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cliente'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nombre_cliente'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fecha_nacimiento'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['usuario'];?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['password'];?>
</td>
                <td><button class="btn"><i class="far fa-edit"></i></button></td>
                <td><button class="btn"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
          <?php
}
}
?>
      </tbody>
    </table><?php }
}
