<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:11:43
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\form_edit_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634db6ffe5f298_19239987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23878a607a51cd68f5efbcb7d5d7dfbcba7a1a8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\form_edit_product.tpl',
      1 => 1666037499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634db6ffe5f298_19239987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- formulario de modificación de productos -->

<div><h3>Formulario de Modificación de Productos</h3></div>
<form action="editProduct" method="POST" class="my-4">
    
    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">  
        <label>Producto</label>
        <input name="name_product" id="name_product" type="text" class="form-control"/>
        <label>Tamaño</label>
        <input name="size" id="size" type="text" class="form-control"/>
        <label>Color</label>
        <input name="color" id="color" type="text" class="form-control"/>
        <label>Precio</label>
        <input name="price" id="price" type="text" class="form-control"/>
    </div>        
    <div class="form-group">
        <label>Categoría</label>
            <select name="id_categorie_fk" id="id_categorie_fk" class="form-control">
            <option> -- Seleccione -- </option>
            <option value = "1">Pinturas</option>
            <option value = "2">Preparación</option>
            <option value = "3">Protección</option>
            </select>
    </div>
    
    <button type="submit" class="btn btn-success">Modificar</button>
    
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
