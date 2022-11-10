<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:49:20
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\form_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ddbf0132a64_41185664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d633e897c41fa096d391576e83e7053c1d4d0f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\form_product.tpl',
      1 => 1666044293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ddbf0132a64_41185664 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de productos -->

<div><h3>Formulario de Alta de Productos</h3></div>
<form action="insertProduct" method="POST" class="my-4">
    <div class="form-group">
        <input type="hidden" name="id_product" value="1">
        <label>Producto</label>
        <input name= "name_product" id="name_product" type="text" class="form-control"/>
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
    
    <button type="submit" class="btn btn-success">Agregar</button>
    
</form>
<?php }
}
