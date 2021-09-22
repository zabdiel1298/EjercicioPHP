<?php
/* Smarty version 3.1.39, created on 2021-09-22 16:59:58
  from 'C:\wamp64\www\templates\menu_planes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b610e0dbc09_05090729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0454bb21939e27314c18acc30b2eedfa5f3ca4c0' => 
    array (
      0 => 'C:\\wamp64\\www\\templates\\menu_planes.tpl',
      1 => 1632329880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b610e0dbc09_05090729 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"><?php echo '</script'; ?>
> 
    <table class="table caption-top">
      <caption>Lista de Planes</caption>
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Cantidad de clientes</th>
          <th scope="col">Agregar</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td><button class="btn"><i class="fa fa-plus-circle"></i></button></td>
          <td><button class="btn"><i class="far fa-edit"></i></button></td>
          <td><button class="btn"><i class="fas fa-trash-alt"></i></button></td>
      </tbody>
    </table><?php }
}
