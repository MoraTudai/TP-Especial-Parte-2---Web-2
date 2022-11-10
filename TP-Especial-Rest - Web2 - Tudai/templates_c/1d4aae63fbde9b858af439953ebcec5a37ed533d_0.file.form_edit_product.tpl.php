<?php
/* Smarty version 4.2.1, created on 2022-10-27 00:27:21
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\form_edit_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6359b449be84a4_40174972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d4aae63fbde9b858af439953ebcec5a37ed533d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\form_edit_product.tpl',
      1 => 1666823235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6359b449be84a4_40174972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- formulario de modificación de productos -->

<div><h3>Formulario de Modificación de Productos</h3></div>
<form action="editProduct" method="POST" class="my-4">
    
    <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
">  
        <label>Producto</label>
        <input name="name_product" id="name_product" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['name_product']->value;?>
"/>
        <label>Tamaño</label>
        <input name="size" id="size" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
"/>
        <label>Color</label>
        <input name="color" id="color" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"/>
        <label>Precio</label>
        <input name="price" id="price" type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"/>
    </div>        
    <div class="form-group">
        <label>Categoría</label>
            <select name="id_categorie_fk" id="id_categorie_fk" class="form-control">
            <option> -- Seleccione -- </option>
            <option value = "<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"></option>
                        </select>
    </div>
    
    <button type="submit" class="btn btn-success">Modificar</button>
    
</form>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
