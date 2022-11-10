<?php
/* Smarty version 4.2.1, created on 2022-10-20 03:44:43
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\categorieById.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6350a80bb91c83_76001876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdaf5126d7b6576aa57979d07130192f17860350' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\categorieById.tpl',
      1 => 1666227125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6350a80bb91c83_76001876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TP-Especial-Web2-Tudai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de productos -->
<h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorie;?>
</h3>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
