<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:54:08
  from 'C:\xampp\htdocs\web2\copia-todo-list\templates\form_alta_categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ddd10ee8005_50264380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c0bcde399461ea66a1bb326c1ff1980a7c7eccd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\copia-todo-list\\templates\\form_alta_categorie.tpl',
      1 => 1666044289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ddd10ee8005_50264380 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de categorias -->

<div><h3>Formulario de Alta de Categorías</h3></div>
<form action="insertCategorie" method="POST" class="my-4">
    
    <div class="form-group">
        <input type="hidden" name="id_categorie" value="1">
        <label>Categoría</label>
        <input name="nombre" id="nombre" type="text" class="form-control"/>
    </div>        
   
    <button type="submit" class="btn btn-success">Agregar</button>
   
</form>

<?php }
}
