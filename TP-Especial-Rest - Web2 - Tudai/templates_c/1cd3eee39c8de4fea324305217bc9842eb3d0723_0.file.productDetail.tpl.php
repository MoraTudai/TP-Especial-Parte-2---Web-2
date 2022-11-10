<?php
/* Smarty version 4.2.1, created on 2022-10-26 23:24:24
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6359a588472ed6_65979802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd3eee39c8de4fea324305217bc9842eb3d0723' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\productDetail.tpl',
      1 => 1666819441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6359a588472ed6_65979802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TP-Especial-Web2-Tudai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Detalle de Producto</h3>
<table class="table table-striped">
    <thead>
        <th>Categoría</th>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Color</th>
        <th>Precio</th>
        <th>Descripción</th>
    </thead>    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalleProducto']->value, 'detalleProd');
$_smarty_tpl->tpl_vars['detalleProd']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detalleProd']->value) {
$_smarty_tpl->tpl_vars['detalleProd']->do_else = false;
?>
    <tr>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detalleProd']->value->categoria,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detalleProd']->value->name_product,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detalleProd']->value->size,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detalleProd']->value->color,25);?>
 </td>
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detalleProd']->value->price,25);?>
 </td>        
        <td> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['detalleProd']->value->descripcion,25);?>
 </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 detalle del producto: <?php echo $_smarty_tpl->tpl_vars['detalleProd']->value->name_product;?>
</small></p>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
