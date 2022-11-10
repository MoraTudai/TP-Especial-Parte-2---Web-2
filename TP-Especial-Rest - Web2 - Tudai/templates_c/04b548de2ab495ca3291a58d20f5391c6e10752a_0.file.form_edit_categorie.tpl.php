<?php
/* Smarty version 4.2.1, created on 2022-10-27 00:16:53
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\form_edit_categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6359b1d53880a9_11328961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04b548de2ab495ca3291a58d20f5391c6e10752a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\form_edit_categorie.tpl',
      1 => 1666822610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6359b1d53880a9_11328961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- formulario de modificación de categorías -->

<div><h3>Formulario de Modificación de Categorías</h3></div>
<form action="editCategorie" method="POST" class="my-4">
    
    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_categorie']->value;?>
">  
        <label>Categoría</label>
        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['id_categorie']->value;?>
"/>
    </div>
   
    <button type="submit" class="btn btn-success">Modificar</button>
   
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
