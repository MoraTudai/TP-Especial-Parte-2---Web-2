<?php
/* Smarty version 4.2.1, created on 2022-10-10 16:52:34
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\new_css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634431b2edac95_72261974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99089b59b58286230ed9db899f3f2ccca5f09319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\new_css.tpl',
      1 => 1665413508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634431b2edac95_72261974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de productos -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tamaño</th>
      <th scope="col">Color</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
      <th scope="row">1</th>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_product;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->name;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->size;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->price;?>
</td>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
  </tbody>
</table>


<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 productos</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
