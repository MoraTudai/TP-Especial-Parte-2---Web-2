<?php
/* Smarty version 4.2.1, created on 2022-10-18 21:51:05
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\form_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634f03a93df799_50940144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73eab64e8cb83622b104f3dd135adbec96d120c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\form_product.tpl',
      1 => 1666044293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634f03a93df799_50940144 (Smarty_Internal_Template $_smarty_tpl) {
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
