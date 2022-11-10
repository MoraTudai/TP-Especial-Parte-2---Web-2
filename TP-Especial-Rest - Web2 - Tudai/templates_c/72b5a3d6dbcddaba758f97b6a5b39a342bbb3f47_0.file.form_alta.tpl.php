<?php
/* Smarty version 4.2.1, created on 2022-10-10 02:53:33
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63436d0d5dcd64_82672328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b5a3d6dbcddaba758f97b6a5b39a342bbb3f47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\form_alta.tpl',
      1 => 1665362676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63436d0d5dcd64_82672328 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de productos -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Producto</label>
                <input name="name" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Tamaño</label>
        <textarea name="size" class="form-control" rows="3"></textarea>
        <label>Color</label>
        <textarea name="color" class="form-control" rows="3"></textarea>
        <label>Precio</label>
        <textarea name="price" class="form-control" rows="3"></textarea>
        <label>Categoría</label>
        <textarea name="id_categorie_fk" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
