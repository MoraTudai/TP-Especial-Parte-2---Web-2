<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:49:20
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ddbf00f3a08_42692384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7044d08fc180194e2e5a3e53e01633458fdb72b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\productList.tpl',
      1 => 1666044016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_product.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ddbf00f3a08_42692384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\copia-todo-list\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de productos -->
<h3>Productos</h3>
<table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Color</th>
        <th>Precio</th>
    </thead>     
       
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <tr>   
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
"> 
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->name_product,25);?>
 </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->size,25);?>
 </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->color,25);?>
 </td>
            <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['producto']->value->price,25);?>
 </td>
            <td><a href='showEdit/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_product;?>
' type="submit" class="btn btn-warning">Modificar</a></td>
            <td><a href='deleteProduct/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_product;?>
' type="submit" class="btn btn-danger">Eliminar</a></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 productos</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:form_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
