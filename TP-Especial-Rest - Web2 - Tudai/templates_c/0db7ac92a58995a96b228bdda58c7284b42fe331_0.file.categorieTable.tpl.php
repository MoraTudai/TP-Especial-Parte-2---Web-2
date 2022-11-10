<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:54:08
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\categorieTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ddd10eabb23_80700611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0db7ac92a58995a96b228bdda58c7284b42fe331' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\categorieTable.tpl',
      1 => 1666044018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta_categorie.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ddd10eabb23_80700611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\copia-todo-list\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- tabla de categorias -->
<h3>Categorías</h3>
<table class="table table-striped">
    <thead>
        <th>Categorías</th>
    </thead>     

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <tr>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_categorie']->value;?>
">
        <td> <span> <b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoria']->value->nombre,25);?>
</b> </span> </td>
        <td><a href='showEditCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorie;?>
' type="submit" class="btn btn-warning">Modificar</a></td>
        <td><a href='deleteCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorie;?>
' type="submit" class="btn btn-danger">Eliminar</a></td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 categorias</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta_categorie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
