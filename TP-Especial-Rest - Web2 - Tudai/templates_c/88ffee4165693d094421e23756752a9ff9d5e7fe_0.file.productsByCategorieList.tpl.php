<?php
/* Smarty version 4.2.1, created on 2022-10-15 23:36:37
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\productsByCategorieList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b27e55e6164_97048703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88ffee4165693d094421e23756752a9ff9d5e7fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\productsByCategorieList.tpl',
      1 => 1665869794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b27e55e6164_97048703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\copia-todo-list\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-striped">
    <thead>
        <th>Categoría</th>
        <th>Nombre</th>
        <th>Tamaño</th>
        <th>Color</th>
        <th>Precio</th>
        
    </thead>     
       <tr>
       
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
    </tr>
</table>


<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 productos con sus categorías</small></p>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
