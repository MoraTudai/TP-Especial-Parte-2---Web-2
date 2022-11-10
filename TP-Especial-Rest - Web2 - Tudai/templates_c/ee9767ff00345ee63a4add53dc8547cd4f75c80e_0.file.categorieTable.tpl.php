<?php
/* Smarty version 4.2.1, created on 2022-10-27 00:05:32
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\categorieTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6359af2c1f8265_00765765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee9767ff00345ee63a4add53dc8547cd4f75c80e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\categorieTable.tpl',
      1 => 1666821921,
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
function content_6359af2c1f8265_00765765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web2\\TP-Especial-Web2-Tudai\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
        <td><a href='showByCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorie;?>
' type="submit" class="btn btn-light"><span> <b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['categoria']->value->nombre,25);?>
</b> </span></a></td>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
            <td><a href='showEditCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorie;?>
' type="submit" class="btn btn-warning">Modificar</a></td>
            <td><a href='deleteCategorie/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorie;?>
' type="submit" class="btn btn-danger">Eliminar</a></td>
        <?php }?>  
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
