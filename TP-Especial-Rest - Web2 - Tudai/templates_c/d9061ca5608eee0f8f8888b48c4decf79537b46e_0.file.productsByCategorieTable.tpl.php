<?php
/* Smarty version 4.2.1, created on 2022-10-21 21:12:28
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\productsByCategorieTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6352ef1c065272_59447121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9061ca5608eee0f8f8888b48c4decf79537b46e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\productsByCategorieTable.tpl',
      1 => 1666379543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6352ef1c065272_59447121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TP-Especial-Web2-Tudai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Productos por Categoría</h3>
<table class="table table-striped">
    <thead>
        <th>Categoría</th>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Color</th>
        <th>Precio</th>
    </thead>    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosPorCategoria']->value, 'productoCategoria');
$_smarty_tpl->tpl_vars['productoCategoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productoCategoria']->value) {
$_smarty_tpl->tpl_vars['productoCategoria']->do_else = false;
?>
    <tr>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['productoCategoria']->value->categoria,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['productoCategoria']->value->name_product,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['productoCategoria']->value->size,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['productoCategoria']->value->color,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['productoCategoria']->value->price,25);?>
 </span> </td>        
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 productos de categoría: <?php echo $_smarty_tpl->tpl_vars['productoCategoria']->value->categoria;?>
</small></p>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
