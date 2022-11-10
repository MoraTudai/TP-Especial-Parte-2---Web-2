<?php
/* Smarty version 4.2.1, created on 2022-10-26 19:02:50
  from 'C:\xampp\htdocs\web2\TP-Especial - Web2 - Tudai\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6359683a9225c8_20065156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea0b6a7d13d971d3d2483199b50efba872e68db6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP-Especial - Web2 - Tudai\\templates\\header.tpl',
      1 => 1666803762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6359683a9225c8_20065156 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>TUDAI - Pinturería</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">TUDAI Pinturería</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="listProduct">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="listCategorie">Categorías</a>
                  </li>
                  
                  <?php if (!(isset($_SESSION['USER_ID']))) {?>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                    
                  <?php } else { ?> 
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">
<?php }
}
