<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:48:22
  from 'C:\xampp\htdocs\codigos\trabajo especial entrega final\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9846d24108_53276861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '586b348cd0122894a6a97ded837dc6448cc83023' => 
    array (
      0 => 'C:\\xampp\\htdocs\\codigos\\trabajo especial entrega final\\templates\\header.tpl',
      1 => 1665964099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c9846d24108_53276861 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiat 147</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container justify-content-center d-flex" >
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="vehiculos" class="botones-head" >vehiculos</a></li>
            <li><a href="especificaciones" class="botones-head" >especificaciones</a></li>
            <?php if (!(isset($_SESSION['USER_ID']))) {?>
              <li><a class="botones-head" href="login">Login</a></li>
            <?php } else { ?> 
              <li><a class="botones-head" href="desloguearse">Desloguearse</a></li>
            <?php }?>

            </ul>
          </div>
        </div>
      </header><?php }
}
