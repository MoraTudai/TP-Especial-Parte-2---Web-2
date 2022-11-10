<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:40:56
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\form_edit_categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e04286dfd57_58736358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8083caba0503b013f2d46c12930fb53e9a70d575' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\form_edit_categorie.tpl',
      1 => 1666044393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e04286dfd57_58736358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- formulario de modificación de categorías -->

<div><h3>Formulario de Modificación de Categorías</h3></div>
<form action="editCategorie" method="POST" class="my-4">
    
    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_categorie']->value;?>
">  
        <label>Categoría</label>
        <input name="nombre" id="nombre" type="text" class="form-control"/>
    </div>
   
    <button type="submit" class="btn btn-success">Modificar</button>
   
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
